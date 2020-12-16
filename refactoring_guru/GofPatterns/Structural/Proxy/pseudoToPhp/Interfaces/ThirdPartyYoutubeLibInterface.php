<?php

interface ThirdPartyYoutubeLib
{
  public function listVideos();
  public function getVideoInfo($id);
  public function downloadVideo($id);
}