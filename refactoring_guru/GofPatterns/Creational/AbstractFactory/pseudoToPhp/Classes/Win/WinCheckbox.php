<?php

include_once("Interfaces/CheckboxInterface.php");

class WinCheckbox implements Checkbox
{
    public function paint()
    {
        echo "windows checkbox \n";
    }
}
