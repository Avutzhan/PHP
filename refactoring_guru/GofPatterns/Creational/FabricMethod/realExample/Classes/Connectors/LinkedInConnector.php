<?php

include_once("Interfaces/SocialNetworkConnector.php");

class LinkedInConnector implements SocialNetworkConnector
{
  private $login, $password;

  public function __construct(string $login, string $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function logIn(): void
  {
    echo "Send HTTP API request to log in user $this->login with " . "password $this->password\n";
  }

  public function logOut(): void
  {
    echo "Send HTTP API request to log out user $this->login\n";
  }

  public function createPost($content): void
  {
    echo "Send HTTP API requests to create a post in LinkedIn timeline. \n";
  }
}
