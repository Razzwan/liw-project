<?php
return $ways = [
    ''              => ['MainController', 'indexAction'],
    '/'             => ['MainController', 'indexAction'],
    '/error'        => ['MainController', 'errorAction'],
    '/more'         => ['MainController', 'moreAction'],
    '/install'      => ['MainController', 'installAction'],

    '/logout'       => ['UserController', 'logoutAction'],
    '/user'         => ['UserController', 'indexAction'],
];
