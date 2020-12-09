<?php

function clientCode(SocialNetworkPoster $creator)
{
  $creator->post("Hello world!");
  $creator->post("I had a large hamburger this morning!");

}