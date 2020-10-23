<?php


namespace App\AbstractFactory\Classes\Bootstrap;


use App\AbstractFactory\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}