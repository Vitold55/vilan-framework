<?php

define("WWW", __DIR__);
define("CORE", dirname(__DIR__) . '/core');
define("ROOT", dirname(__DIR__));
define("APP", dirname(__DIR__) . '/app');

require '../core/Router.php';
require '../vendor/functions.php';

spl_autoload_register(function($class) {
    $file = APP . "/controllers/$class.php";
    if (is_file($file)) {
        require_once $file;
    }
});

// custom routes (must be first for priority)
Router::add('^pages/?(?P<action>[a-z-]+)?$', ['controller' => 'Posts']);
// default routes
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

$query = rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '/');

Router::dispatch($query);