<?php

require_once __DIR__ . "/../vendor/autoload.php";

use src\Controllers\SiteController;
use src\Core\Application;

$app = new Application();

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/movies', [SiteController::class, 'movies']);
$app->router->post('/movies', [SiteController::class, 'handleMovie']);

$app->run();