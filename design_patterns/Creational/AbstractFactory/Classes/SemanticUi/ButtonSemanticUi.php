<?php


namespace App\AbstractFactory\Classes\SemanticUi;


use App\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}