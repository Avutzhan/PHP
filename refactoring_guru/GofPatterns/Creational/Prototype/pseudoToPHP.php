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

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function clone() : Shape
    {
        return new Rectangle($this->width, $this->height);
    }
}

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

$app = new Application();
var_dump($app->businessLogic());
var_dump($app->shapes);