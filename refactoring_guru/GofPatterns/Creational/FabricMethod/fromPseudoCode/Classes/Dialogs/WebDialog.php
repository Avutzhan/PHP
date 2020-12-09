<?php

include_once("Fabric/Dialog.php");
include_once("Classes/Buttons/HTMLButton.php");

class WebDialog extends Dialog {
    public function createButton()
    {
        return new HTMLButton();
    }
}
