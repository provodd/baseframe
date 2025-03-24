<?php
namespace Framework\Core;

class Db
{
    public static function connect(): void
    {
        $db = Env::get('DB_NAME');
        $user = Env::get('DB_USER');
        $pass = Env::get('DB_PASSWORD');

        require_once __DIR__ . '/../include/rb.php';

        \R::setup("mysql:host=127.0.0.1;dbname=$db", $user, $pass);
        \R::ext('xdispense', fn($table) => \R::getRedBean()->dispense($table));

        session_start();
    }
}
