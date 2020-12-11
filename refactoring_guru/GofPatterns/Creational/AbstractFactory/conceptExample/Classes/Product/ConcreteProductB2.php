<?php

include_once("Interfaces/AbstractProductBInterface.php");

class ConcreteProductB2 implements AbstractProductB
{
  public function usefulFunctionB(): string
  {
    return "The result of the product B2.";
  }

  public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
  {
    $result = $collaborator->usefulFunctionA();

    return "The result of the B2 collaborating with the ({$result})";
  }
}