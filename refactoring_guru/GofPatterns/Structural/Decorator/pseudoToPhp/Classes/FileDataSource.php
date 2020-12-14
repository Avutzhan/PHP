<?php

include_once("Interfaces/DataSourceInterface.php");

class  FileDataSource implements DataSource
{
  public $filename;

  public function __construct($filename)
  {
    $this->filename = $filename;
  }

  public function writeData($data)
  {
    $this->filename .= $data;
  }

  public function readData()
  {
    return $this->filename;
  }


} 