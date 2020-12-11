<?php

include_once("Interfaces/TitleTemplateInterface.php")

class TwigTitleTemplate implements TitleTemplate
{
  public function getTemplateString(): string
  {
    return "<h1>{{ title }}</h1>";
  }
}