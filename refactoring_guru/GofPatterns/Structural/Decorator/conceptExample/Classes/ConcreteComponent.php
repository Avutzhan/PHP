<?php

include_once("Interfaces/ComponentInterface.php");

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}