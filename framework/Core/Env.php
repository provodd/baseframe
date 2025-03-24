<?php

namespace Framework\Core;

class Env
{
    public static function load(): void
    {
        $lines = file(__DIR__ . '/../../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) continue;
            [$key, $value] = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }

    public static function get(string $key, $default = null): mixed
    {
        return $_ENV[$key] ?? $default;
    }
}
