<?php


namespace App\Bridge\WithBridge\Realization;


use App\Bridge\Entities\Category;
use App\Bridge\WithBridge\Interfaces\WidgetRealizationInterface;

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Category $category)
    {
        $this->entity = $category;
    }

    public function getId()
    {
        return $this->entity->id;
    }

    public function getTitle()
    {
        return $this->entity->name;
    }

    public function getDescription()
    {
        return $this->entity->description;
    }

}