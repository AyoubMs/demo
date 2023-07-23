<?php

use Core\App;
use Core\Validator;
use Core\Database;
use function Core\base_path;
use function Core\getuserid;
use function Core\view;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required';
}

if (!empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => "Create Note",
        'errors' => $errors,
    ]);
}

if (empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => getuserid($db)
    ]);

    header('location: /notes');
    die();
}

// validation issue
