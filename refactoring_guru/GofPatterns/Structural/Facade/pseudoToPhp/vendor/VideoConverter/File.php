<?php

class File
{
  public $file;

  public function __construct($file)
  {
    $this->file = $file;
  }

  public function save()
  {
    return "saved";
  }
}