<?php

//Abstraction

abstract class Page
{
    protected $renderer;

    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}
