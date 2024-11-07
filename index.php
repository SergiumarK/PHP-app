<?php


require 'functions.php';

require 'Database.php';

// require 'router.php';

$config = require 'config.php';

$db = new Database($config['database']);
$posts = $db->query("Select * from posts")->fetchAll();

dd($posts);