<?php

include_once("Interfaces/CheckboxInterface.php");

class MacCheckbox implements Checkbox
{
    public function paint()
    {
        echo "macos checkbox \n";
    }
}