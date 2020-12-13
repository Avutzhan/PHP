<?php

include_once("Classes/Shape.php");

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function clone(): Shape
    {
        return new Rectangle($this->width, $this->height);
    }
}