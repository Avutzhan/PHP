<?php

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