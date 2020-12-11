<?php

interface TemplateFactory
{
  public function createTitleTemplate(): TitleTemplate;

  public function createPageTemplate(): PageTemplate;

  public function getRenderer(): TemplateRenderer;
}