<?php

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Title validation
    if (!validator::string($_POST['title'], 1, 1000)) {
        $errors['title'] = 'The title must be between 1 and 1,000 characters.';
    }

    // Description validation
    if (!validator::string($_POST['description'], 1, 100)) {
        $errors['description'] = 'The description must be between 1 and 100 characters.';
    }

    // Price validation
    if (!is_numeric($_POST['price']) || $_POST['price'] <= 0) {
        $errors['price'] = 'The price must be a positive number.';
    }

    // Image validation
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        // Validare tip imagine
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['img']['type'], $allowed_types)) {
            $errors['img'] = 'Invalid image type. Only JPG, PNG, and GIF are allowed.';
        } else {
            // Calea unde va fi salvat fișierul
            $upload_dir = base_path('uploads/'); // folderul de upload
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true); // Crează folderul dacă nu există
            }

            // Generare nume fișier unic
            $img_name = uniqid('img_') . '-' . basename($_FILES['img']['name']);
            $img_path = $upload_dir . $img_name;

            // Mută fișierul încărcat în directorul de upload
            if (!move_uploaded_file($_FILES['img']['tmp_name'], $img_path)) {
                $errors['img'] = 'Failed to upload the image.';
            }
        }
    } else {
        $errors['img'] = 'An image is required.';
    }

    // Dacă nu sunt erori, adaugă produsul în baza de date
    if (empty($errors)) {
        $db->query('INSERT INTO products (title, description, img, price, user_id, product_details) VALUES (:title, :description, :img, :price, :user_id, :product_details)', [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'img' => $img_path ?? '', // Calea imaginii
            'price' => $_POST['price'],
            'user_id' => 1,
            'product_details' => $_POST['product_details']
        ]);
    }
}

view('prod/create.view.php', [
    'errors' => $errors,
    'heading' => 'Add Product'
]);