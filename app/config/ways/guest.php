<?php
return $ways = [
    ''              => ['MainController', 'indexAction'],
    '/'             => ['MainController', 'indexAction'],
    '/error'        => ['MainController', 'errorAction'],
    '/more'         => ['MainController', 'moreAction'],
    '/install'      => ['MainController', 'installAction'],

    '/registration' => ['UserController', 'registrationAction'],
    '/login'        => ['UserController', 'loginAction'],

    '/articles'     => ['ArticleController', 'show_allAction'],
];
