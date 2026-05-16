<?php

require __DIR__ . '/bootstrap.php';

$router = new Router();

require __DIR__ . '/routes.php';

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
