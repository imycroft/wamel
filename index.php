<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'views/home.php',
    '/about' => 'views/about.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require 'views/404.php';
}