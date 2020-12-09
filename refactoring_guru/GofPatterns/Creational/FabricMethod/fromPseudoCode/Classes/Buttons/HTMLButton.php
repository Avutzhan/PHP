<?php

include_once("Interfaces/ButtonInterface.php");

class HTMLButton implements Button {
    public function render() {
        echo "HTML code button \n";
    }

    public function onClick() {
        echo "browser event listener for button \n";
    }
}