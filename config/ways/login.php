<?php
return $ways = [
    ''              => ['controller' => 'main',    'action' => 'index'],
    '/'             => ['controller' => 'main',    'action' => 'index'],
    '/error'        => ['controller' => 'main',    'action' => 'error'],
    '/logout'       => ['controller' => 'user',    'action' => 'logout'],
    '/test'         => ['controller' => 'main',    'action' => 'test'],
    '/user'         => ['controller' => 'user',    'action' => 'index'],
    '/articles'     => ['controller' => 'article', 'action' => 'show_all'],
    '/article'      => ['controller' => 'article', 'action' => 'one'],
    '/ajax'         => ['controller' => 'ajax',    'action' => 'change_title'],
    '/ajax/like'    => ['controller' => 'ajax',    'action' => 'like'],
    '/issue'        => ['controller' => 'issue',   'action' => 'one'],
];