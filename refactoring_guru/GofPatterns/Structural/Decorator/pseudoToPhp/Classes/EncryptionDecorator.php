<?php

include_once("Classes/DataSourceDecorator.php");

class EncryptionDecorator extends DataSourceDecorator
{
  public function writeData($data)
  {
    $this->wrappee .= " encrypted ";
    $this->wrappee .= $data;
  }

  public function readData()
  {
    return $this->wrappee;
  }


}