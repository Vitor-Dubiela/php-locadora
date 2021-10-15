<?php

require_once __DIR__ . "./vendor/autoload.php";

use src\Core\Application;

$app = new Application();

$app->router->get('/', function() {
    print('<h1>Hello World!</h1>');    
});

$app->run();