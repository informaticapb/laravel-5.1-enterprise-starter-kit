<?php
return [

    'audit-log'           => [
        'category'              => 'Tarefas',
        'msg-index'             => 'Acessado lista de Tarefas.',
        'msg-show'              => 'Detalhes acessados de usuário: :username.',
        'msg-store'             => 'Novo usuário criado: :username.',
        'msg-edit'              => 'Editar propriedades do usuário: :username.',
        'msg-replay-edit'       => 'Editar novamente propriedades do usuário: :username.',
        'msg-update'            => 'Propriedades do usuário foram atualizadas: :username.',
        'msg-destroy'           => 'Deletar usuário: :username.',
        'msg-enable'            => 'Usuário ativado: :username.',
        'msg-disabled'          => 'Usuário desativado: :username.',
        'msg-enabled-selected'  => 'Ativar multiplos usuários.',
        'msg-disabled-selected' => 'Desativar multiplos usuários.',
    ],

    'status'              => [
        'created'                   => 'Usuário criado com sucesso',
        'updated'                   => 'Usuário atualizado com sucesso',
        'deleted'                   => 'Usuário deletado com sucesso',
        'global-enabled'            => 'Usuários selecionados ativados.',
        'global-disabled'           => 'Usuários selecionados  desativados.',
        'enabled'                   => 'Usuário ativado.',
        'disabled'                  => 'Usuário desativado.',
        'no-user-selected'          => 'Nenhum usuário selecionado.',
    ],

    'error'               => [
        'cant-be-edited'                => 'Usuário não pode ser editado',
        'cant-be-deleted'               => 'Usuário não pode ser deletado',
        'cant-be-disabled'              => 'Usuário não pode ser desativado',
        'login-failed-user-disabled'    => 'Essa conta foi desativada.',
        'perm_not_found'                => 'Não foi possível encontrar a permissão #:id.',
        'user_not_found'                => 'Não foi possível encontrar a permissão #:id.',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Tarefas',
            'description'       => 'Exibindo Tarefas',
            'table-title'       => 'Lista de Tarefas',
        ],
        'show'              => [
            'title'             => 'Admin | Usuários | Mostrar',
            'description'       => 'Exibindo usuário: :full_name',
            'section-title'     => 'Detalhes do usuário'
        ],
        'create'            => [
            'title'            => 'Tarefas | Criar',
            'description'      => 'Criando um nova Tarefa',
            'section-title'    => 'Nova tarefa'
        ],
        'edit'              => [
            'title'            => 'Admin | User | Editar',
            'description'      => 'Editando a tarefa:',
            'section-title'    => 'Editar tarefa'
        ],
    ],

    'columns'           => [
        'title'                   =>  'Titulo: ',
        'body'                   =>  'Tarefa: ',
        'begin'                 =>  'Data inicio: ',
        'end'                   =>  'Data fim: ',
    ],

    'button'               => [
        'create'    =>  'Criar nova tarefa',
        'update'    =>  'Atualizar',
        'cancel'    =>  'Cancelar',
    ],

    'rnavbar'             => [
        'security'              => 'Segurança',
        'admin'                 => 'Administração',
        'users'                 => 'Usuários',
        'roles'                 => 'Funções',
        'permissions'           => 'Permissões',
        'routes'                => 'Rotas',
    ],

];

