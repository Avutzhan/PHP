<?php

abstract class SocialNetworkPoster
{
  abstract public function getSocialNetwork(): SocialNetworkConnector;

  public function post($content): void
  {
    $network = $this->getSocialNetwork();

    $network->logIn();
    $network->createPost($content);
    $network->logout();
  }
}