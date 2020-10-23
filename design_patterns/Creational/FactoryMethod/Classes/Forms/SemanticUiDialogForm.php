<?php


namespace App\FactoryMethod\Classes\Forms;


use App\FactoryMethod\Factories\SemanticUiFactory;

class SemanticUiDialogForm extends AbstractForm
{
    public function createGuiKit() //: GuiFactoryInterface
    {
        return new SemanticUiFactory();
    }

}