<?php

include_once("Interfaces/ButtonInterface.php");

class WindowsButton implements Button {
    public function render() {
        echo "windows style button \n";
    }

    public function onClick() {
        echo "windows event listener for button \n";
    }
}