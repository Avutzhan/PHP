<?php


namespace App\Singleton;


use App\Singleton\Traits\SingletonTrait;

class AdvancedSingleton
{
    use SingletonTrait;

    private $test;

    public function setTest($val)
    {
        $this->test = $val;
    }
}