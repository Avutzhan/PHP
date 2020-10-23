<?php


namespace App\FactoryMethod\Classes\SemanticUi;


use App\FactoryMethod\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}