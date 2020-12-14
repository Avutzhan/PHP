<?php

include_once("Classes/Dot.php");

class Circle extends Dot
{
  public $radius;

  public function __construct($x, $y, $radius)
  {
    $this->x = $x;
    $this->y = $y;
    $this->radius = $radius;
  }

  public function draw()
  {
    return "draw circle with x y and radius";
  }
}