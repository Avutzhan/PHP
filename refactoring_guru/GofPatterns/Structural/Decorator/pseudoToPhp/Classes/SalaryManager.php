<?php

class SalaryManager 
{
  public $source;

  public function __construct($source)
  {
    $this->source = $source;
  }

  public function load()
  {
    return $this->source->readData();
  }

  public function save()
  {
    $this->source->writeData("salary data");
  }
}