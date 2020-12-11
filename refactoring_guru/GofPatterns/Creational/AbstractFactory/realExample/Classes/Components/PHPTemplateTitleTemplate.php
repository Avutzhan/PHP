<?php

include_once("Interfaces/TitleTemplateInterface.php");

class PHPTemplateTitleTemplate implements TitleTemplate
{
  public function getTemplateString(): string
  {
    return "<h1><?= \$title; ?></h1>";
  }
}