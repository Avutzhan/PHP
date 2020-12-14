<?php

include_once("Interfaces/Implementation/DeviceInterface.php");

//concrete implementation

class Radio implements Device
{
  public $power = false;
  public $volume = 0;

  public function isEnabled()
  {
    return $this->power;
  }

  public function enable()
  {
    $this->power = true;
  }

  public function disable()
  {
    $this->power = false;
  }

  public function getVolume()
  {
    return $this->volume;
  }

  public function setVolume($percent)
  {
    $this->volume = $percent;
  }
}