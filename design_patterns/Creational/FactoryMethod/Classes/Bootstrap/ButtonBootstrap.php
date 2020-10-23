<?php


namespace App\FactoryMethod\Classes\Bootstrap;


use App\FactoryMethod\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}