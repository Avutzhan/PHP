<?php

include_once("Classes/BasePageTemplate.php");

class TwigTemplate extends BasePageTemplate
{
  public function getTemplateString(): string 
  {
    $renderedTitle = $this->titleTemplate->getTemplateString();

    return <<<HTML
      <div class="page">
          $renderedTitle
          <article class="content">{{ content }}</article>
      </div>
    HTML;
  }
}