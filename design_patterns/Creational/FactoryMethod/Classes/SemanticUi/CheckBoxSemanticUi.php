<?php


namespace App\FactoryMethod\Classes\SemanticUi;


use App\FactoryMethod\Interfaces\CheckBoxInterface;

class CheckBoxSemanticUi implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}