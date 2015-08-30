<?php

/**
 * @const bool   DEVELOP  флаг рабочей среды
 */
define('DEVELOP', true);


/**
 * определяет путь к папке, где лежит проект, а именно папки:
 * 1. config; 2. controllers; 3. models; 4. views
 */
defined("LIW_WEB") or define("LIW_WEB", dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR);

require __DIR__ . '/../vendor/autoload.php'; //Файл загрузчик модулей приложения

/**
 * Запуск приложения
 *
 * @var $app object liw\core\base\Router
 */
$access = new \liw\core\access\AccessDefault();
(new \liw\core\App())->start(require LIW_WEB . 'config/config.php', $access);

