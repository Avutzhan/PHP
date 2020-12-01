<?php

interface Button
{
    public function paint();
}

class WinButton implements Button
{
    public function paint()
    {
        echo "windows button \n";
    }
}

class MacButton implements Button
{
    public function paint()
    {
        echo "macos button \n";
    }
}

interface Checkbox
{
    public function paint();
}

class WinCheckbox implements Checkbox
{
    public function paint()
    {
        echo "windows checkbox \n";
    }
}

class MacCheckbox implements Checkbox
{
    public function paint()
    {
        echo "macos checkbox \n";
    }
}

interface GUIFactory
{
    public function createButton();
    public function createCheckbox();
}

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

class Application
{
    private $button;
    private $checkbox;
    private $factory;

    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createUI()
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    public function paint()
    {
        $this->createUI();
        $this->button->paint();
        $this->checkbox->paint();
    }
}

class ApplicationConfigurator
{
    public function main()
    {
        $config = "windows";

        if ($config === "windows") {
            $factory = new WinFactory();
        } else if ($config === "mac") {
            $factory = new MacFactory();
        } else {
            throw new Exception("error");
        }

        return new Application($factory);
    }
}

$app = new ApplicationConfigurator();
$factory = $app->main();
$factory->paint();
