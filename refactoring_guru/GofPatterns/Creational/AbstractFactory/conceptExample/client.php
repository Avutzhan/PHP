<?php

function clientCode(AbstractFactory $factory)
{
  $productA = $factory->createProductA();
  $productB = $factory->createProductB();

  echo $productB->usefulFunctionB() . "\n";
  echo $productB->anotherUsefulFunctionB($productA) . "\n";
}