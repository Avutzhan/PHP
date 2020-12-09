<?php

include_once("Classes/AbstractCreator.php");
include_once("Classes/ConcreteProduct/ConcreteProduct1.php");

class ConcreteCreator1 extends Creator
{
  public function factoryMethod(): Product
  {
    return new ConcreteProduct1();
  }
}