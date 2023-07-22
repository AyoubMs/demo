<?php

use Core\App;
use function Core\base_path;
use function Core\view;

use Core\Database;

$db = App::resolve(Database::class);

$heading = 'Notes';

$notes = $db->query('select * from notes where user_id = 1')->get();

//dd($notes);

view('notes/index.view.php', [
    'heading' => "Notes",
    'notes' => $notes
]);
