<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];


if (!validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than a 1,000 characters is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'errors' => $errors,
        'heading' => 'Create Note'
    ]);
}

if (empty($errors)) {
    $db->query('insert into notes (body, user_id) values (:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 17
    ]);

    header('location: /Cara/notes');
    exit();
}


