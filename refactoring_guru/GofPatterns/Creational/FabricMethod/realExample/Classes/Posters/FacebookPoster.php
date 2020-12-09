<?php

include_once("Classes/SocialNetworkPoster.php");
include_once("Classes/Connectors/FacebookConnector.php");


class FacebookPoster extends SocialNetworkPoster
{
  private $login, $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function getSocialNetwork(): SocialNetworkConnector
  {
    return new FacebookConnector($this->login, $this->password);
  }
}
