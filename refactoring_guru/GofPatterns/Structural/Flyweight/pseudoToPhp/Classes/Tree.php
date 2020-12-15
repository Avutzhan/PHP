<?php

class Tree
{
  public $x;
  public $y;
  public $type;

  public function __construct($x, $y, $type)
  {
    $this->x = $x;
    $this->y = $y;
    $this->type = $type;
  } 

  public function draw($canvas)
  {
    $this->type->draw($canvas, $this->x, $this->y);
  }
}