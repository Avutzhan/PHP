<?php

abstract class Creator
{
  abstract public function factoryMethod(): Product;

  public function someOperation(): string
  {
    $product = $this->factoryMethod();

    $result = "Creator: The same creator's code has just worked with " . $product->operation();

    return $result;
  }
}