<?php

include_once("Interfaces/TemplateFactoryInterface.php");
include_once("Classes/Components/PHPTemplateTitleTemplate.php");
include_once("Classes/Components/PHPTemplatePageTemplate.php");
include_once("Classes/Components/PHPTemplateRenderer.php");

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}