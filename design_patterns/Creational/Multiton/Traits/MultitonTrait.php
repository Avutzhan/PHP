<?php


namespace App\Multiton\Traits;


trait MultitonTrait
{
    protected static $instances = [];

    private $name;

    private function __construct()
    {
        //
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    public static function getInstance($instanceName)
    {
        if (isset(static::$instances[$instanceName])) {
            return static::$instances[$instanceName];
        }

        static::$instances[$instanceName] = new static();
        static::$instances[$instanceName]->setName($instanceName);

        return static::$instances[$instanceName];
    }

    public function setName($value)
    {
        $this->name = $value;

        return $this;
    }
}