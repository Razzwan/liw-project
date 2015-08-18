<?php

/**
 * @const bool   DEVELOP  флаг рабочей среды
 */
define('DEVELOP', true);

define("LIW_WEB", dirname(__DIR__)); //определяем папку проекта

require LIW_WEB . '/vendor/autoload.php'; //Файл загрузчик модулей приложения

/**
 * Запуск приложения
 *
 * @var $app object liw\core\base\Router
 */
(new \liw\core\App())->start(require LIW_WEB . '/config/config.php');


