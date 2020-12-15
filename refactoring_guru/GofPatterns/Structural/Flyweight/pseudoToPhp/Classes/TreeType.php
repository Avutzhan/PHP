<?php

class TreeType
{
  public $name;
  public $color;
  public $texture;

  public function __construct($name, $color, $texture)
  {
    $this->name = $name;
    $this->color = $color;
    $this->texture = $texture;
  }

  public function draw($canvas, $x, $y)
  {
    $picture = "";
    $picture .= $this->name;
    $picture .= $this->color;
    $picture .= $this->texture;
    $picture .= $canvas;
    $picture .= $x;
    $picture .= $y;

    var_dump($picture);
    return $picture;
  }
}