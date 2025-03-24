<?php

namespace Framework\Core;

class Controller
{
    protected function render(string $view, array $data = []): void
    {
        extract($data);
        require __DIR__ . '/../../views/' . $view . '.php';
    }

    protected function json(array $data, int $status = 200): void {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
