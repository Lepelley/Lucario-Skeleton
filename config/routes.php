<?php

return function (FastRoute\RouteCollector $router) {
    $router->get('/', 'App\Controller\HomeController::print');
};
