<?php

class YoutubeManager
{
  protected $service;

  public function __construct(ThirdPartyYoutubeLib $service)
  {
    $this->service = $service;
  }

  public function renderVideoPage($id)
  {
    return $this->service->getVideoInfo($id);
  }

  public function renderListPanel()
  {
    return $this->service->listVideos();
  }

  public function reactOnUserInput()
  {
    $result = $this->service->downloadVideo(10);

    // Повторяющиеся запросы на загрузку могут кэшироваться для увеличения
    // скорости.

    $result = $this->service->downloadVideo(10);

    $this->renderVideoPage(10);
    $this->renderListPanel();

  }
}