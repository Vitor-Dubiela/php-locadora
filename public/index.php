<?php

require_once __DIR__ . "/../vendor/autoload.php";

use src\Core\Controllers\SiteController;
use src\Core\Application;
use src\Core\Controllers\ClientController;

$app = new Application();

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/signup', [SiteController::class, 'renderForm']);
$app->router->post('/signup', [ClientController::class, 'post']);

$app->run();