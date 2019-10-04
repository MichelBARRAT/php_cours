<?php

namespace App;

class Session
{
    private static $_instance;
    private function __construct()
    {
        session_start();
    }
    public static function getInstance(): Session
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    public function __get(string $key)
    {
        return $_SESSION[$key];
    }
    public function __set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }
    public function __isset($key): bool
    {
        return isset($_SESSION[$key]);
    }
    public function __unset($key): void
    {
        unset($_SESSION[$key]);
    }
    public static function reset(): void
    {
        Session::getInstance();
        $_SESSION = [];
    }
}
