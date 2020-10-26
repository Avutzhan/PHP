<?php


namespace App\Singleton;


use App\Singleton\Contracts\AnotherConnection;

class LaravelSingleton implements AnotherConnection
{
    private $test;

    public function setTest($val)
    {
        $this->test = $val;
    }
}