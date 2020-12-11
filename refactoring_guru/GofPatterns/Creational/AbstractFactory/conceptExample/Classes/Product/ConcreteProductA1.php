<?php

include_once("Interfaces/AbstractProductAInterface.php");

class ConcreteProductA1 implements AbstractProductA
{
  public function usefulFunctionA(): string
  {
    return "The result of the product A1.";
  }
}