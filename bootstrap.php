<?php


use Core\App;
use Core\Container;
use Core\Database;
use function Core\base_path;
use function Core\dd;

$container = new Container();

$container->bind('Core\Database', function() {
    $config = require base_path('config.php');


    return new Database($config['database']);
});

App::setContainer($container);