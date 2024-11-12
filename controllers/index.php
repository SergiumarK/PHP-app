<?php 

$config = require 'config.php';
$db = new Database($config['database']);

$products = $db->query('select * from products where user_id = 1')->get();

require 'views/index.view.php';