<?php

use function Core\view;

$_SESSION['name'] = 'Jeffrey';

view('index.view.php', [
    'heading' => "Home"
]);