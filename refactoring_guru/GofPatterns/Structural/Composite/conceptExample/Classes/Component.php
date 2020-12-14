<?php

abstract class Component
{
    protected $parent;

    public function setParent(Component $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): Component
    {
        return $this->parent;
    }

    public function add(Component $component): void { }

    public function remove(Component $component): void { }

    public function isComposite(): bool
    {
        return false;
    }

    abstract public function operation(): string;
}