<?php
return $ways = [
    ''              => ['controller' => 'main', 'action' => 'index'],
    '/'             => ['controller' => 'main', 'action' => 'index'],
    '/error'        => ['controller' => 'main', 'action' => 'error'],
    '/registration' => ['controller' => 'user', 'action' => 'registration'],
    '/login'        => ['controller' => 'user', 'action' => 'login'],
    '/test'         => ['controller' => 'main', 'action' => 'test'],
    '/more'         => ['controller' => 'main', 'action' => 'more'],
    '/install'      => ['controller' => 'main', 'action' => 'install'],
];
