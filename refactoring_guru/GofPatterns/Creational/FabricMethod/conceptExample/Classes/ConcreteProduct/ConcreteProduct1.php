<?php

include_once("Interfaces/ProductInterface.php");

class ConcreteProduct1 implements Product
{
  public function operation(): string
  {
    return "{Result of the ConcreteProduct1}";
  }
}