<?php

include_once("Classes/Pegs/RoundPeg.php");

class SquarePegAdapter extends RoundPeg
{
  public $peg; // SquarePeg

  public function __construct(SquarePeg $peg)
  {
    $this->peg = $peg;
  }

  public function getRadius()
  {
    return $this->peg->getWidth() * sqrt(2) / 2;
  }

}
