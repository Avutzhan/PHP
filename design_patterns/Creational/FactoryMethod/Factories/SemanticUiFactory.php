<?php


namespace App\FactoryMethod\Factories;


use App\FactoryMethod\Classes\SemanticUi\ButtonSemanticUi;
use App\FactoryMethod\Classes\SemanticUi\CheckBoxSemanticUi;
use App\FactoryMethod\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    public function buildButton() //: ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckBox() //: CheckBoxInterface
    {
        return new CheckBoxSemanticUi();
    }
}