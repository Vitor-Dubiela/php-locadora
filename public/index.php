<?php

require_once __DIR__ . "/../vendor/autoload.php";

use src\Core\Application;

$app = new Application();

$app->router->get('/', 'home');
$app->router->get('/movies', 'movies');
$app->router->post('/movies', function() {
    echo "Hello World!";
});

$app->run();