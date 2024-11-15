<?php 

$config = require base_path('config.php');
$db = new Database($config['database']);

$products = $db->query('select * from products where user_id = 1')->get();

view('main.view.php', [
    'products' => $products
]);