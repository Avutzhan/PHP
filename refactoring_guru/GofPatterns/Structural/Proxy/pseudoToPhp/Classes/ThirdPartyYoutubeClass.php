<?php

include_once("Interfaces/ThirdPartyYoutubeLibInterface.php");

class ThirdPartyYoutubeClass implements ThirdPartyYoutubeLib
{
  public function listVideos()
  {
    return "video list";
  }

  public function getVideoInfo($id)
  {
    return "video info {$id}";
  }

  public function downloadVideo($id)
  {
    echo "Downloading a file from the Internet.\n";
        $result = $id;
        echo "Downloaded bytes: " . strlen($result) . "\n";

        return $result;
  }
}