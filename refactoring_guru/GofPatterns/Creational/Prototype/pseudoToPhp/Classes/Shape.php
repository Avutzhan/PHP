<?php

//base prototype
abstract class Shape
{
    public $x;
    public $y;
    public $color;

    public function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    abstract public function clone() : Shape;
}
