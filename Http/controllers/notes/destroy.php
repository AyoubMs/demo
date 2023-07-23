<?php

use Core\App;
use Core\Database;
use function Core\authorize;
use function Core\base_path;
use function Core\dd;
use function Core\getuserid;
use function Core\view;

$db = App::resolve(Database::class);

$currentUserId = getuserid($db);;

$note = $db->query('select * from notes where id = :id', [
    ':id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    ':id' => $_POST['id']
]);

header('location: /notes');
exit();

