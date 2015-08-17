<?php

/**
 * @const bool   DEVELOP  флаг рабочей среды
 */
define('DEVELOP', true);

define("LIW_WEB", dirname(__DIR__) . DIRECTORY_SEPARATOR); //определяем папку проекта

require __DIR__ . '/../vendor/autoload.php'; //Файл загрузчик модулей приложения

/**
 * Запуск приложения
 *
 * @var $app object liw\core\base\Router
 */
(new \liw\core\App())->start(require LIW_WEB . 'config/config.php');


