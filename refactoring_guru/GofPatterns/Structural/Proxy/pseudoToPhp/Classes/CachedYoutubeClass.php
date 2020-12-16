<?php

include_once("Interfaces/ThirdPartyYoutubeLibInterface.php");

class CachedYoutubeClass implements ThirdPartyYoutubeLib
{
  private $service;

  private $listCache = [];
  private $videoCache = [];

  public function __construct(ThirdPartyYoutubeLib $service)
  {
      $this->service = $service;
  }

  public function listVideos()
  {
    $this->listCache = $this->service->listVideos();
    return $this->listCache;
  }

  public function getVideoInfo($id)
  {
    $this->videoCache = $this->service->getVideoInfo($id);
    return $this->videoCache;
  }

  public function downloadVideo($id)
  {
    if (!isset($this->cache[$id])) {
        echo "CacheProxy MISS. ";
        $result = $this->service->downloadVideo($id);
        $this->cache[$id] = $result;
    } else {
        echo "CacheProxy HIT. Retrieving result from cache.\n";
    }
    return $this->cache[$id];
  }
}