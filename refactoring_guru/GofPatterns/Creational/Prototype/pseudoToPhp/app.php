<?php

include_once("Classes/Circle.php");
include_once("Classes/Rectangle.php");

//client side
class Application
{
    public $shapes;

    public function __construct()
    {
        $circle = new Circle(10);
        $circle->x = 15;
        $circle->y = 12;
        $this->shapes[] = $circle;

        $anotherCircle = $circle->clone();
        $this->shapes[] = $anotherCircle;

        $rectangle = new Rectangle(10, 20);
        $this->shapes[] = $rectangle;
    }

    public function businessLogic()
    {
        $shapesCopy = [];
        foreach ($this->shapes as $shape) {
            $shapesCopy[] = $shape->clone();
        }
        return $shapesCopy;
    }
}