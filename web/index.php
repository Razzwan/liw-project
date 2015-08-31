<?php

/**
 * @const bool   DEVELOP  флаг рабочей среды
 */
define('DEVELOP', true);

/**
 * определяет путь к папке, где лежит проект (папки:  config, controllers, models, views)
 */
define("LIW_WEB", realpath(__DIR__ . '/../app') . '/');

require_once __DIR__ . '/../vendor/autoload.php'; //Файл загрузчик модулей приложения

/**
 * Запуск приложения
 *
 * @var $app object liw\core\App
 */
liw\core\App::start();



