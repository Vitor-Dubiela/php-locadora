<?php

require_once __DIR__ . "/../vendor/autoload.php";

use src\Core\Application;

$app = new Application();

$app->router->get('/', 'home');

$app->run();