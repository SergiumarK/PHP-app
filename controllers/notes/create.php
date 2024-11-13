<?php 

require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (! validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than a 1,000 characters is required';
    }

    if (empty($errors)) {
        $db->query('insert into notes (body, user_id) values (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }

}

view('notes/create.view.php', [
    'errors' => $errors,
    'heading' => 'Create Note'
]);