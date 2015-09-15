<?php
namespace liw\console;

class App
{
    static private $commands = [
        'init'
    ];

    static public function run()
    {
        if(in_array($_SERVER['argv'][1], static::$commands)){
            echo "yes\n";
        } else {
            echo "\x1b[31mКоманда:\x1b[0m \x1b[1;35m" . $_SERVER['argv'][1] . "\x1b[0m \x1b[31mне найдена\x1b[0m \n";
        }
    }
}