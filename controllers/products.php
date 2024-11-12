<?php 

$heading = 'Our Products';

$config = require 'config.php';
$db = new Database($config['database']);

$products = $db->query('select * from products where user_id = 1')->fetchAll();




require 'views/products.view.php';