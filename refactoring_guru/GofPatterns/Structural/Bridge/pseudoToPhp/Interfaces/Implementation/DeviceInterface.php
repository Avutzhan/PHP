<?php

//implementation

interface Device
{
  public function isEnabled();

  public function enable();

  public function disable();

  public function getVolume();

  public function setVolume($percent);


}