<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$product = $db->query('select * from products where id = :id', [
    'id' => $_GET['id']]
)->findORFail();

if (! $product) {
    abort();
}

authorize($product['user_id'] === $currentUserId);



view('product.view.php', [
    'product' => $product
]);
