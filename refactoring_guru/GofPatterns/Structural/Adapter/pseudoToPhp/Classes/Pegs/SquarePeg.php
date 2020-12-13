<?php

class SquarePeg
{
  public $width;

  public function __construct($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}
