<?php

include_once("Classes/AbstractCreator.php");
include_once("Classes/ConcreteProduct/ConcreteProduct2.php");

class ConcreteCreator2 extends Creator
{
  public function factoryMethod(): Product
  {
    return new ConcreteProduct2();
  }
}