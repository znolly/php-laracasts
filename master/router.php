<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

/*
if ($uri === '/') {
    require 'controllers/index.php';
} elseif ($uri === '/about') {
    require 'controllers/about.php';
} elseif ($uri === '/contact') {
    require 'controllers/contact.php';
}
    */

$routes = require 'routes.php';

function abort($value = 404) {
    http_response_code($value);
    require "views/{$value}.view.php";
    die();
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);