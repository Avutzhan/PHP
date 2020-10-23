<?php


namespace App\FactoryMethod\Classes\Bootstrap;


use App\FactoryMethod\Interfaces\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}