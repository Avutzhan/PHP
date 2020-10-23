<?php


namespace App\AbstractFactory\Factories;


use App\AbstractFactory\Classes\Bootstrap\ButtonBootstrap;
use App\AbstractFactory\Classes\Bootstrap\CheckBoxBootstrap;
use App\AbstractFactory\Interfaces\GuiFactoryInterface;

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