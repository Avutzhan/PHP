<?php

include_once("Classes/FileDataSource.php");
include_once("Classes/CompressionDecorator.php");
include_once("Classes/EncryptionDecorator.php");
include_once("Classes/SalaryManager.php");

class ApplicationConfigurator
{
  public $enabledEncryption = true;
  public $enabledCompression = false;

  public function configurationExample()
  {
    $source = new FileDataSource("salary.dat");
  
    if ($this->enabledEncryption) {
      $source = new EncryptionDecorator($source);
    }

    if ($this->enabledCompression) {
      $source = new CompressionDecorator($source);
    }

    $logger = new SalaryManager($source);
    $salary = $logger->load();
    
    var_dump($salary);
  }
}