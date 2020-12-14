<?php

//abstraction

class Remote
{
  protected $device;

  public function __construct(Device $device)
  {
    $this->device = $device;
  }

  public function togglePower()
  {
    if ($this->device->isEnabled()) {
      $this->device->disable();
    } else {
      $this->device->enable();
    }
  }

  public function volumeUp()
  {
    $this->device->setVolume($this->device->getVolume() + 10);
  }

  public function volumeDown()
  {
    $this->device->setVolume($this->device->getVolume() - 10);
  }
}