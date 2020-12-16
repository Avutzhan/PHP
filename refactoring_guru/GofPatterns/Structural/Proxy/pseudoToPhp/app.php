<?php

include_once("Classes/ThirdPartyYoutubeClass.php");
include_once("Classes/CachedYoutubeClass.php");
include_once("YoutubeManager.php");

class Application
{
  public function init()
  {
    $youtubeService = new ThirdPartyYoutubeClass();
    $youtubeProxy = new CachedYoutubeClass($youtubeService);
    $manager = new YoutubeManager($youtubeProxy);
    $manager->reactOnUserInput();
  }
}