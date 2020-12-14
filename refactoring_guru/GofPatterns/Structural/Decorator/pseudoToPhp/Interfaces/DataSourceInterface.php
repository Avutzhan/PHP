<?php

interface DataSource
{
  public function writeData($data);
  public function readData();
}