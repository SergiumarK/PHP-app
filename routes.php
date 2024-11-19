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




$router->get('/Cara/', 'main.php');
$router->get('/Cara/about', 'about.php');
$router->get('/Cara/blog', 'blog.php',);
$router->get('/Cara/cart', 'cart.php');
$router->get('/Cara/contact', 'contact.php');

$router->get('/Cara/notes', 'notes/index.php')->only('auth');
$router->get('/Cara/note', 'notes/show.php');
$router->delete('/Cara/note', 'notes/destroy.php');

$router->get('/Cara/note/edit', 'notes/edit.php');
$router->patch('/Cara/note', 'notes/update.php');

$router->get('/Cara/notes/create', 'notes/create.php');
$router->post('/Cara/notes', 'notes/store.php');

$router->get('/Cara/products', 'prod/index.php');
$router->get('/Cara/product', 'prod/show.php');
$router->get('/Cara/products/create', 'prod/create.php');

$router->get('/Cara/register', 'registration/create.php')->only('guest');
$router->post('/Cara/register', 'registration/store.php')->only('guest');

$router->get('/Cara/login', 'session/create.php')->only('guest');
$router->post('/Cara/session', 'session/store.php')->only('guest');
$router->delete('/Cara/session', 'session/destroy.php')->only('auth');