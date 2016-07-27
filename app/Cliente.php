<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';
    //
	protected $fillable = [
		'nome',
		'insc_estadual',
		'tel1',
		'tel2',
		'celular',
		'fax',
		'obs',
		'email',
		'site',
		'contato',
		'tel1_contato',
		'tel2_contato',
		'logradouro',
		'bairro',
		'cep',
		'cidade',
		'estado',
		'ref_endereco',
		'logradouro_entrega',
		'bairro_entrega',
		'cep_entrega',
		'cidade_entrega',
		'estado_entrega',
		'logradouro_cobranca',
		'bairro_cobranca',
		'cep_cobranca',
		'cidade_cobranca',
		'estado_cobranca',
		'endereco_entrega_value',
		'endereco_cobranca_value',
		'cpfcnpj'
	];
}
