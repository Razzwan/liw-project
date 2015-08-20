<?php
return $ways = [
    ''              => ['controller' => 'main', 'action' => 'index'],
    '/'             => ['controller' => 'main', 'action' => 'index'],
    '/error'        => ['controller' => 'main', 'action' => 'error'],
    '/registration' => ['controller' => 'user', 'action' => 'registration'],
    '/login'        => ['controller' => 'user', 'action' => 'login'],
    '/test'         => ['controller' => 'main', 'action' => 'test'],
    '/ajax'         => ['controller' => 'ajax',    'action' => 'change_title'],
    '/about'        => ['controller' => 'main',    'action' => 'about'],
];