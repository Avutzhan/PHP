<?php


namespace App\Singleton;


class SimpleSingleton
{
    private static $instance;

    private $test;

    static public function getInstance()
    {
        return static::$instance ? static::$instance : (static::$instance = new static());
    }

    public function setTest($val)
    {
        $this->test = $val;
    }

    static function getDescription() {
        //...
    }
}