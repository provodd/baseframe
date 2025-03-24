<?php

namespace Framework\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, array $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, array $action): void
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $action = $this->routes[$method][$uri] ?? null;

        if ($action && class_exists($action[0]) && method_exists($action[0], $action[1])) {
            [$controller, $method] = $action;
            (new $controller)->$method();
        } else {
            http_response_code(404);
            echo '404 Not Found';
        }
    }
}
