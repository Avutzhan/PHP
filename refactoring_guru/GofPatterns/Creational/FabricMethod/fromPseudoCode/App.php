<?php

include_once("Classes/Dialogs/WindowsDialog.php");
include_once("Classes/Dialogs/WebDialog.php");

class Application {
    public $dialog;

    public function initialize()
    {
        $config = "WIN";

        if ($config == "WIN") {
            $this->dialog = new WindowsDialog();
        } else if ($config == "WEB") {
            $this->dialog = new WebDialog();
        } else {
            $this->dialog = "error";
        }
    }

    public function main()
    {
        $this->initialize();
        $this->dialog->render();
    }
}