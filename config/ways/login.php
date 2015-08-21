<?php
return $ways = [
    ''              => ['controller' => 'main',    'action' => 'index'],
    '/'             => ['controller' => 'main',    'action' => 'index'],
    '/error'        => ['controller' => 'main',    'action' => 'error'],
    '/logout'       => ['controller' => 'user',    'action' => 'logout'],
    '/test'         => ['controller' => 'main',    'action' => 'test'],
    '/user'         => ['controller' => 'user',    'action' => 'index'],
    '/more'         => ['controller' => 'main', 'action' => 'more'],
    '/install'      => ['controller' => 'main', 'action' => 'install'],
];