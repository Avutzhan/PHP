<?php


namespace App\AbstractFactory\Classes\SemanticUi;


use App\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxSemanticUi implements CheckBoxInterface
{
    public function draw()
    {
        return __CLASS__;
    }
}