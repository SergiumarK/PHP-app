<?php 

// return  [
    
//     '/Cara/' => 'controllers/main.php',
//     '/Cara/about' => 'controllers/about.php',
//     '/Cara/blog' => 'controllers/blog.php',
//     '/Cara/cart' => 'controllers/cart.php',
//     '/Cara/contact' => 'controllers/contact.php',

//     '/Cara/notes' => 'controllers/notes/index.php',
//     '/Cara/note' => 'controllers/notes/show.php',
//     '/Cara/notes/create' => 'controllers/notes/create.php',

//     '/Cara/products' => 'controllers/prod/index.php',
//     '/Cara/product' => 'controllers/prod/show.php',
//     '/Cara/products/create' => 'controllers/prod/create.php',
// ];


// $router->get('/Cara/', 'controllers/main.php');
// $router->delete('/Cara/note', 'controllers/notes/destroy.php');




$router->get('/Cara/', 'controllers/main.php');
$router->get('/Cara/about', 'controllers/about.php');
$router->get('/Cara/blog', 'controllers/blog.php',);
$router->get('/Cara/cart', 'controllers/cart.php');
$router->get('/Cara/contact', 'controllers/contact.php');

$router->get('/Cara/notes', 'controllers/notes/index.php');
$router->get('/Cara/note', 'controllers/notes/show.php');
$router->delete('/Cara/note', 'controllers/notes/destroy.php');

$router->get('/Cara/note/edit', 'controllers/notes/edit.php');
$router->patch('/Cara/note', 'controllers/notes/update.php');

$router->get('/Cara/notes/create', 'controllers/notes/create.php');
$router->post('/Cara/notes', 'controllers/notes/store.php');

$router->get('/Cara/products', 'controllers/prod/index.php');
$router->get('/Cara/product', 'controllers/prod/show.php');
$router->get('/Cara/products/create', 'controllers/prod/create.php');