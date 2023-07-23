<?php

use Core\App;
use function Core\base_path;
use function Core\view;

use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Notes';

$user_id = $db->query('select id from users where email = :email', [
    ':email' => $_SESSION['user']['email']
])->get();

$user_id = $user_id[0]['id'];

$notes = $db->query('select * from notes where user_id = :user_id', [
    ':user_id' => $user_id
])->get();

view('notes/index.view.php', [
    'heading' => "Notes",
    'notes' => $notes
]);
