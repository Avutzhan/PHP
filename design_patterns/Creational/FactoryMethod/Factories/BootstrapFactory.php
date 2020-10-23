<?php


namespace App\FactoryMethod\Factories;


use App\FactoryMethod\Classes\Bootstrap\ButtonBootstrap;
use App\FactoryMethod\Classes\Bootstrap\CheckBoxBootstrap;
use App\FactoryMethod\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    public function buildButton() //: ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox() //: CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}