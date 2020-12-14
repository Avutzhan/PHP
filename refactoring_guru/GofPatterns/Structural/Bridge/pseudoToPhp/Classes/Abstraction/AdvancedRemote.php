<?php

include_once("Classes/Abstraction/Remote.php");

//extended abstraction

class AdvancedRemote extends Remote
{
  public function mute()
  {
    $this->device->setVolume(0);
  }
}