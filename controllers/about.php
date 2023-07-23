<?php

use function Core\dd;
use function Core\view;

//dd($_SESSION['name']);

$heading = 'About Us';

view('about.view.php', [
    'heading' => "About Us"
]);
