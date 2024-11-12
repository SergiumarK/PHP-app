<?php

$config = require 'config.php';
$db = new Database($config['database']);

$currentUserId = 1;

$product = $db->query('select * from products where id = :id', [
    'id' => $_GET['id']]
)->fetch();

if (! $product) {
    abort();
}

if ($product['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}



require 'views/product.view.php';
