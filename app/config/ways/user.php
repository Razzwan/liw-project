<?php
return $ways = [
    ''              => ['Main::index'],
    '/'             => ['Main::index'],
    '/error'        => ['Main::error'],
    '/more'         => ['Main::more'],
    '/install'      => ['Main::install'],

    '/logout'       => ['User::logout'],
    '/user'         => ['User::index'], '/user/=id'
];
