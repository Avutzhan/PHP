<?php

include_once("Interfaces/AbstractFactoryInterface.php");
include_once("Classes/Product/ConcreteProductA2.php");
include_once("Classes/Product/ConcreteProductB2.php");

class ConcreteFactory2 implements AbstractFactory
{
  public function createProductA(): AbstractProductA
  {
    return new ConcreteProductA2();
  }

  public function createProductB(): AbstractProductB
  {
    return new ConcreteProductB2();
  }

}