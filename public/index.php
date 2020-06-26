<?php

require dirname(__DIR__).'/vendor/autoload.php';

$router = new Lucario\Core\Router(include dirname(__DIR__).'/config/routes.php');
$kernel = new Lucario\Core\Kernel($router);
echo $kernel->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
