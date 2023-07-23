<?php

use Core\App;
Use \Core\Database;
use function Core\authorize;
use function Core\getuserid;
use function Core\view;


$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    ':id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === getuserid($db));

view('notes/edit.view.php', [
    'heading' => "Edit Note",
    'errors' => [],
    'note' => $note
]);