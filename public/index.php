<?php

error_reporting(-1);

use core\Router;

define("WWW", __DIR__);
define("CORE", dirname(__DIR__) . '/core');
define("ROOT", dirname(__DIR__));
define("APP", dirname(__DIR__) . '/app');
define("LAYOUT", 'default');

require '../vendor/functions.php';

// Autoloader
spl_autoload_register(function($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});

// custom routes (must be first for priority)
Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);
// default routes
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

$query = rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '/');

Router::dispatch($query);