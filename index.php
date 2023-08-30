<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'controllers/HomeController.php',
    '/about' => 'controllers/AboutController.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require 'views/404.php';
}