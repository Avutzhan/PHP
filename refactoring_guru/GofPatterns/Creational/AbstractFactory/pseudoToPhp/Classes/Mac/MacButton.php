<?php

include_once("Interfaces/ButtonInterface.php");

class MacButton implements Button
{
    public function paint()
    {
        echo "macos button \n";
    }
}