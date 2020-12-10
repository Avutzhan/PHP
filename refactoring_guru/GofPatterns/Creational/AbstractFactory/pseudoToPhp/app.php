<?php

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