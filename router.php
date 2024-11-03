<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/Cara/' => 'controllers/index.php',
    '/Cara/about' => 'controllers/about.php',
    '/Cara/blog' => 'controllers/blog.php',
    '/Cara/cart' => 'controllers/cart.php',
    '/Cara/contact' => 'controllers/contact.php',
    '/Cara/products' => 'controllers/products.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}


routeToController($uri, $routes);