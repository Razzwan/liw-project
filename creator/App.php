<?php
namespace liw\creator;

class App
{
    static private $commands = [
        'init'
    ];

    static public function run()
    {
        if(in_array($_SERVER['argv'][1], static::$commands)){
            $path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'mydirr7rrrrrrrrrr';
            mkdir($path);
            echo $path;
        } else {
            echo 'no';
        }
    }
}