<?php

include_once("Classes/Shape.php");

class Circle extends Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function clone() : Shape
    {
        $cloned = new Circle($this->radius);
        $cloned->x = $this->x;
        $cloned->y = $this->y;
        return $cloned;
    }
}