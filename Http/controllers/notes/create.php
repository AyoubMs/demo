<?php

Use \Core\Database;
use Core\Validator;
use function Core\base_path;
use function Core\view;


view('notes/create.view.php', [
    'heading' => "Create Note",
    'errors' => [],
]);