<?php


namespace App\Singleton\Traits;


trait SingletonTrait
{
    private static $instance = null;

    //запрещаем прямое создание обьекта скрываем контсруктор
    private function __construct()
    {
        //
    }

    //запрещаем клонирование
    private function __clone()
    {
        //
    }

    //запрещаем десериализацию в общем мы запрещаем все методы создание второго экземпляра
    private function __wakeup()
    {

    }

    public static function getInstance()
    {
        return static::$instance ? static::$instance : (static::$instance = new static());
    }
}