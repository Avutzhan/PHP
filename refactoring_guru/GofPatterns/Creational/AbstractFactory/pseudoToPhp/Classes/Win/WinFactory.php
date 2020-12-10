<?php

include_once("Interfaces/GUIFactoryInterface.php");
include_once("Classes/Win/WinButton.php");
include_once("Classes/Win/WinCheckbox.php");

class WinFactory implements GUIFactory
{
    public function createButton() : Button
    {
        return new WinButton();
    }

    public function createCheckbox() : Checkbox
    {
        return new WinCheckbox();
    }
}