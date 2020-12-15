<?php

include_once("Facades/VideoConverter.php");

class Application
{
  public function main()
  {
    $convertor = new VideoConverter();
    $mp4 = $convertor->convert("youtubevideo.ogg", "mp4");
    $mp4->save();
    var_dump($mp4->save());
  }
}