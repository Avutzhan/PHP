<?php

include_once("Interfaces/AbstractFactoryInterface.php");
include_once("Classes/Product/ConcreteProductA1.php");
include_once("Classes/Product/ConcreteProductB1.php");

class ConcreteFactory1 implements AbstractFactory
{
  public function createProductA(): AbstractProductA
  {
    return new ConcreteProductA1();
  }

  public function createProductB(): AbstractProductB
  {
    return new ConcreteProductB1();
  }

}