<?php

use function Core\authorize;
use function Core\getuserid;
use function Core\view;

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$note = $db->query('select * from notes where id = :id', [
    ':id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === getuserid($db));


//dd($note);

view('notes/show.view.php', [
    'heading' => "Note",
    'note' => $note
]);