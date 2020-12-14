<?php

include_once("Interfaces/GraphicInterface.php");

class Dot implements Graphic
{
  public $x, $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function move($x, $y)
  {
    $this->x += $x;
    $this->y += $y;
  }

  public function draw()
  {
    return "draw dots x y";
  }

}