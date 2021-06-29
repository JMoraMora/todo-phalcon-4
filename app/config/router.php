<?php

$router = $di->getRouter();

// Define your routes here
$router->add('/', [
  'namespace'  => 'App\Controllers',
  'controller' => 'index',
  'action'     => 'index',
]);

$router->add('/api/v1/:controller/:action', [
  'namespace'  => 'App\Controllers',
  'controller' => 1,
  'action'     => 2,
])->via(['GET', 'POST', 'PUT', 'PATCH']);

$router->handle($_SERVER['REQUEST_URI']);
