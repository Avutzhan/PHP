<?php


namespace App\FactoryMethod\Classes\Forms;


use App\FactoryMethod\Factories\BootstrapFactory;

class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit() //: GuiFactoryInterface
    {
        return new BootstrapFactory();
    }

}