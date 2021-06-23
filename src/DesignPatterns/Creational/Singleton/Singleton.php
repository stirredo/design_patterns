<?php


namespace DesignPatterns\Creational\Singleton;


final class Singleton
{
    public static $instance = null;
    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new Singleton();
        }
        return static::$instance;

    }

    private function __clone(): void
    {
        // can't be cloned
    }

    public function __wakeup(): void
    {
        throw new \Exception("Cannot unserialize singleton");
    }


}