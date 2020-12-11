<?php

include_once("Interfaces/AbstractProductAInterface.php");

class ConcreteProductA2 implements AbstractProductA
{
  public function usefulFunctionA(): string
  {
    return "The result of the product A2.";
  }
}