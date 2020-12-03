<?php

interface Button {
    public function render();
    public function onClick();
}

class WindowsButton implements Button {
    public function render() {
        echo "windows style button \n";
    }

    public function onClick() {
        echo "windows event listener for button \n";
    }
}

class HTMLButton implements Button {
    public function render() {
        echo "HTML code button \n";
    }

    public function onClick() {
        echo "browser event listener for button \n";
    }
}

//fabric base class
abstract class Dialog {
    public function render()
    {
        $button = $this->createButton();
        $button->onClick("closeDialog");
        $button->render();
    }

    abstract public function createButton();
}

class WindowsDialog extends Dialog {
    public function createButton()
    {
        return new WindowsButton();
    }
}

class WebDialog extends Dialog {
    public function createButton()
    {
        return new HTMLButton();
    }
}

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

$app = new Application();
echo $app->main();

//windows event listener for button
//windows style button