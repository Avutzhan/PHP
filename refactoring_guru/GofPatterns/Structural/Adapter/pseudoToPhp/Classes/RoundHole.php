<?php

class RoundHole
{
  public $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function getRadius()
  {
    return $this->radius;
  }

  public function fits(RoundPeg $peg)
  {
    return $this->getRadius() >= $peg->getRadius();
  }
}
