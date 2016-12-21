<?php

require '../core/Router.php';
require '../vendor/functions.php';

//Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)');

$query = rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '/');

debug(Router::getRoutes());

if (Router::matchRoute($query)) {
    debug(Router::getRoute());
} else {
    echo '404';
}