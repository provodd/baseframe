<?php
namespace Framework\Core;

class App
{
    public function run(): void
    {
        Env::load();
        Db::connect();

        $router = new Router();

        $routes = require __DIR__ . '/../../app/routes/web.php';
        $routes($router);

        $router->dispatch();
    }

}
