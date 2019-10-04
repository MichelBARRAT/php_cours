<?php
class Session
{
    private static $_instance;
    public function __construct()
    {
        session_start();
    }
    public static function getInstance(): Session
    {
        if (!isset(static::$_instance)) {
            static::$_instance = new static;
        }
        return static::$_instance;
    }
    public function __get(string $key): string
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : '';
    }
    public function __set(string $key, string $value): void
    {
        $_SESSION[$key] = $value;
    }
    public function __isset($key): bool
    {
        return isset($_SESSION[$key]);
    }
}
