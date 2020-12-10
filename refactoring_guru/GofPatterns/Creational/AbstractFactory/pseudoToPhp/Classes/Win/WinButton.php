<?php

include_once("Interfaces/ButtonInterface.php");

class WinButton implements Button
{
    public function paint()
    {
        echo "windows button \n";
    }
}