<?php

include_once("Interfaces/GUIFactoryInterface.php");
include_once("Classes/Mac/MacButton.php");
include_once("Classes/Mac/MacCheckbox.php");

class MacFactory implements GUIFactory
{
    public function createButton() : Button
    {
        return new MacButton();
    }

    public function createCheckbox() : Checkbox
    {
        return new MacCheckbox();
    }
}