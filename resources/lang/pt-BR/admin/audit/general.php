<?php

return [

    'audit-log'           => [
        'category'          => 'Registro de auditoria',
        'msg-index'         => 'Acessando o registro de auditoria.',
        'msg-show'          => 'Acessando detalhes do registro de auditoria.',
        'msg-purge'         => 'Remova entradas antigas do registro de auditoria.',
        'msg-replay'        => 'Gerar repetição no item ID #:ID do registro de auditoria.',
    ],

    'status'              => [
        'purged'              => 'Registro de auditoria limpo',
    ],

    'error'               => [
        'no-replay-available'   => 'Nenhuma ação de repetição disponível.',
        'no-data-viewer'        => 'Sem visualizador de dados definido.',
        'no-data'               => 'Sem dados para mostrar.',
    ],

    'page'                => [
        'index'               => [
            'title'               => 'Admin | Registro de auditoria',
            'description'         => 'Relatório de todas as ações realizadas pelos usuários',
            'table-title'         => 'Registro de auditoria',
        ],
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Admin | Registro de auditoria',
            'description'       => 'Registro de auditoria',
            'table-title'       => 'Registro de auditoria',
        ],
        'show'              => [
            'title'             => 'Admin | Registro de auditoria | Mostrar',
            'description'       => 'Exibindo o relatório do Registro de auditoria',
            'section-title'     => 'Detalhes do relatório do Registro de auditoria'
        ],
    ],

    'columns'             => [
        'username'            =>  'Nome do usuário',
        'category'            =>  'Categoria',
        'message'             =>  'Menssagem',
        'date'                =>  'Date',
        'data'                =>  'Data',
        'actions'             =>  'Ações',
    ],

    'button'              => [
        'purge'               => 'Removendo entradas do registro de auditoria com mais de :purge_retention dias.',
    ],

];
