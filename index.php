<?php 

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)) {
    require 'controllers/{}.php';
}