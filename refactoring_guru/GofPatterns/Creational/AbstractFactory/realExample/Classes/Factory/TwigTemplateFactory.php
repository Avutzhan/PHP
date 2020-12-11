<?php

include_once("Interfaces/TemplateFactoryInterface.php");
include_once("Classes/Components/TwigTitleTemplate.php");
include_once("Classes/Components/TwigPageTemplate.php");
include_once("Classes/Components/TwigRenderer.php");

class TwigTemplateFactory implements TemplateFactory
{
  public function createTitleTemplate(): TitleTemplate
  {
    return new TwigTitleTemplate();
  }

  public function createPageTemplate(): PageTemplate
  {
    return new TwigPageTemplate($this->createTitleTemplate());
  }

  public function getRenderer(): TemplateRenderer
  {
    return new TwigRenderer();
  }
}