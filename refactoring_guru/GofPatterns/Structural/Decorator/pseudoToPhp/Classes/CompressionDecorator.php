<?php

include_once("Classes/DataSourceDecorator.php");

class CompressionDecorator extends DataSourceDecorator
{
  public function writeData($data)
  {
    $this->wrappee .= " compressed ";
    $this->wrappee .= $data;
  }

  public function readData()
  {
    return $this->wrappee;
  }
}