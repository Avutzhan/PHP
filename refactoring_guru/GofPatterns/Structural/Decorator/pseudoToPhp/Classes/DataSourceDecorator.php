<?php

include_once("Interfaces/DataSourceInterface.php");

class DataSourceDecorator implements DataSource
{
  protected $wrappee;

  public function __construct($source)
  {
    $this->wrappee = $source;
  }

  public function writeData($data)
  {
    $this->wrappee->writeData($data);
  }

  public function readData()
  {
    return $this->wrappee->readData();
  }

}