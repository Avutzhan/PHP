<?php

interface AbstractFactory
{
  public function createProductA(): AbstractProductA;
  public function createProductB(): AbstractProductB;

  
}