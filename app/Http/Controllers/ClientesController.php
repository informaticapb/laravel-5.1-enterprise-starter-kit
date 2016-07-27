<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\cliente;
use Auth;
use App\Repositories\AuditRepository as Audit;
use Flash;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $attributes = $request->all();
        if (isset($attributes['modify'])) {
            $attributes['id'] = $attributes['modify'];
        } else if (isset($attributes['delete'])) {
            $attributes['id'] = $attributes['delete'];
        } else if (isset($attributes['show'])) {
            $attributes['id'] = $attributes['show'];
        } else {
            $attributes['id'] = '0';
        }
        Audit::log( Auth::user()->id, 'Listar Clientes', "O usuário visualisou a lista de clientes.", $attributes);
        $page_title = 'Cadastro de Clientes';
        $page_description = 'Pesquisar editar ou inserir novos clientes';
//        return view('cadastro.clientes.index', compact('page_title', 'page_description'));

        $filter = \DataFilter::source(new Cliente());
        $filter->add('nome','Nome do cliente', 'text');
        $filter->add('cpfcnpj]', 'CPF | CNPJ', 'text');
        $filter->submit('Procurar');
        $filter->reset('Resetar');
        $filter->build();

        $grid = \DataGrid::source($filter);
        $grid->attributes(array("class"=>"table"));
        $grid->add('nome', 'Nome do Cliente', true);
        $grid->add('insc_estadual', 'Inscrição estadual', true);
        $grid->add('cpfcnpj]', 'CPF | CNPJ', true);
        $grid->add('obs|strip_tags|substr[0,20]','Observeções',true);
        $grid->edit('clientes/edit', 'Opções','modify|delete');
        $grid->paginate(50);

        if (\Input::get('do_delete')) return \Redirect::to('cadastros/clientes');

        return  view('cadastros.clientes.index', compact('page_title', 'page_description', 'filter', 'grid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $attributes = $request->all();
        if (isset($attributes['modify'])) {
            $attributes['id'] = $attributes['modify'];
        } else if (isset($attributes['delete'])) {
            $attributes['id'] = $attributes['delete'];
        } else if (isset($attributes['show'])) {
            $attributes['id'] = $attributes['show'];
        } else if (isset($attributes['update'])) {
            $attributes['id'] = $attributes['update'];
        } else {
            $attributes['id'] = '0';
        }
        Audit::log( Auth::user()->id, 'Editar Cliente', "O usuário editou o cliente ID: :id.", $attributes);
        $page_title = 'Cadastro de Clientes';
        $page_description = 'Pesquisar editar ou inserir novos clientes';
        
        $edit = \DataEdit::source(new Cliente());
        if (isset($attributes['view'])) {
            $edit->label('Visualizando Cliente... ');
        } else if (isset($attributes['show'])) {
            $edit->label('Visualizando Cliente... ');
        } else if (isset($attributes['modify'])) {
            $edit->label('Alterando Cliente...');
        } else if (isset($attributes['update'])) {
            Flash::success("Cliente Salvo");
        } else if (isset($attributes['do_delete'])) {
            Flash::success("Cliente Deletado");
        }
//        $edit->link("cadastros/clientes","Voltar", "TR")->back();
        $edit->add('nome', 'Nome', 'text')->rule('required|max:100|unique:clientes,nome,'.$attributes['id']);
        $edit->add('insc_estadual', 'Inscrição Estadual', 'text')->rule('max:40');
        $edit->add('tel1', 'Telefone 1', 'text')->rule('max:20');
        $edit->add('tel2', 'Telefone 2', 'text')->rule('max:20');
        $edit->add('celular', 'Celular', 'text')->rule('max:20');
        $edit->add('fax', 'Fax', 'text')->rule('max:20');
        $edit->add('obs', 'Observações', 'redactor');
        $edit->add('email', 'Email', 'text')->rule('max:50');
        $edit->add('site', 'Site', 'text')->rule('max:50');
        $edit->add('contato', 'Contato', 'text')->rule('max:100');
        $edit->add('tel1_contato', 'Telefone de contato 1', 'text')->rule('max:20');
        $edit->add('tel2_contato', 'Telefone de contato 2', 'text')->rule('max:20');
        $edit->add('logradouro', 'Logradouro', 'text')->rule('max:100');
        $edit->add('bairro', 'Bairro', 'text')->rule('max:50');
        $edit->add('cep', 'CEP', 'text')->rule('max:10');
        $edit->add('cidade', 'Cidade', 'text')->rule('max:50');
        $edit->add('estado', 'Estado', 'text')->rule('max:2');
        $edit->add('ref_endereco', 'Pontos de referência', 'text')->rule('max:75');
        $edit->add('endereco_entrega_value','Endereço de Entrega. Usar outro endereço', 'checkbox');
        $edit->add('logradouro_entrega', 'Logradouro de entrada', 'text')->rule('max:100');
        $edit->add('bairro_entrega', 'Bairro de Entrega', 'text')->rule('max:50');
        $edit->add('cep_entrega', 'CEP de Entrega', 'text')->rule('max:10');
        $edit->add('cidade_entrega', 'Cidade de entrega', 'text')->rule('max:50');
        $edit->add('estado_entrega', 'Estado de entrega', 'text')->rule('max:2');
        $edit->add('endereco_cobranca_value', 'Endereço de cobraça. Usar outro endereço', 'checkbox');
        $edit->add('logradouro_cobranca', 'Logradouro de cobrança', 'text')->rule('max:100');
        $edit->add('bairro_cobranca', 'Bairro de Cobrança', 'text')->rule('max:50');
        $edit->add('cep_cobranca', 'CEP de Cobrança', 'text')->rule('max:10');
        $edit->add('cidade_cobranca', 'Cidade de entrega', 'text')->rule('max:50');
        $edit->add('estado_cobranca', 'Estado de cobrança', 'text')->rule('max:2');
        $edit->add('cpfcnpj', 'CPF | CNPJ', 'text')->rule('max:30');
//        $edit->buttons_right->buttons->BR('Salvar');

        //$edit->submit('Salvar');

//        $edit->saved(function () use ($edit) {
//            $edit->message("Cliente Salvo");
//            $edit->link("/cadastros/clientes/edit","Voltar para o Formulário");
//        });
//        if (\Input::get('do_delete')) {$edit->link("cadastros/clientes","Voltar", "TR")->back();}
//        if (\Input::get('update')) { $edit=\DataEdit::source(new Cliente()); $edit->link("cadastros/clientes","Voltar", "TR")->back();}

        return view('cadastros.clientes.edit', compact('page_title', 'page_description', 'edit'));
//        return $edit->view('cadastros.clientes.edit', compact('page_title', 'page_description', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
