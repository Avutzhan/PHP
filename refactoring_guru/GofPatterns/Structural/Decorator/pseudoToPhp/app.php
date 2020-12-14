<?php

include_once("Classes/FileDataSource.php");
include_once("Classes/CompressionDecorator.php");
include_once("Classes/EncryptionDecorator.php");

class Application
{
  public function dumbUsageExample()
  {
    $source = new FileDataSource("somefile.dat");
    $source->writeData(" salary records");
    var_dump($source);

    $source = new CompressionDecorator("somefile.dat");
    $source->writeData(" salary records");
    var_dump($source);


    $source = new EncryptionDecorator("somefile.dat");
    $source->writeData("salary records");
    var_dump($source);

  }
}