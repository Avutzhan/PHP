<?php


namespace App\Multiton;


use App\Multiton\Interfaces\MultitonInterface;
use App\Multiton\Traits\MultitonTrait;

class SimpleMultiton implements MultitonInterface
{
    use MultitonTrait;

    private $test;

    public function setTest($value)
    {
        $this->test = $value;

        return $this;
    }

}