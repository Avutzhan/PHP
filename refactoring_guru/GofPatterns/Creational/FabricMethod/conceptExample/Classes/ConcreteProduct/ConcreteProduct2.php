<?php

include_once("Interfaces/ProductInterface.php");

class ConcreteProduct2 implements Product
{
  public function operation(): string
  {
    return "{Result of the ConcreteProduct2}";
  }
}