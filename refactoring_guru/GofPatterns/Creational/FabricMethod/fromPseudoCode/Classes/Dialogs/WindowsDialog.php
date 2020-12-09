<?php

include_once("Fabric/Dialog.php");
include_once("Classes/Buttons/WindowsButton.php");

class WindowsDialog extends Dialog {
    public function createButton()
    {
        return new WindowsButton();
    }
}