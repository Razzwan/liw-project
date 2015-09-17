<?php
return [
    ''              => ['Main::index'],       //Run MainController::indexAction();
    '/'             => ['Main::index'],
    '/error'        => ['Main::error'],
    '/more'         => ['Main::more'],
    '/install'      => ['Main::install'],
    '/test/{:d}'=> [
        'Main::test'
    ],

    '/registration' => ['User::registration'],
    '/login'        => ['User::login'],

    '/articles'     => ['Article::show_all'],
];
