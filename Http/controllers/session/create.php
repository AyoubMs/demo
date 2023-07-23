<?php


use Core\Session;
use function Core\view;

view('session/create.view.php', [
    'errors' => Session::get('errors')
]);