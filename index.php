<?php


require 'functions.php';

// require 'router.php';

$dsn = "mysql:host=localhost;port=3306;user=root;dbname=cara;charset=utf8mb4";

$pdo = new PDO($dsn);

$stmt = $pdo ->prepare("select * from posts");
$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}