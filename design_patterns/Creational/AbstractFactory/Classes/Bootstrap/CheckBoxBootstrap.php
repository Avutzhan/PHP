<?php


namespace App\AbstractFactory\Classes\Bootstrap;


use App\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}