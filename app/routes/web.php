<?php
use Framework\Core\Router;
use App\Controllers\HomeController;

return function(Router $router) {
    $router->get('/', [HomeController::class, 'index']);
    $router->get('/about', [HomeController::class, 'about']);
};
