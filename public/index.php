<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Bramus\Router\Router();

$router->get('/', 'App\Controller\Api\SuccessController@index');
$router->get('/api/v1/locations/', 'App\Controller\Api\LocationController@index');

$router->run();
