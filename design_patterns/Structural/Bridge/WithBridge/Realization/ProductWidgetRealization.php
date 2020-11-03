<?php


namespace App\Bridge\WithBridge\Realization;


use App\Bridge\Entities\Product;
use App\Bridge\WithBridge\Interfaces\WidgetRealizationInterface;

class ProductWidgetRealization implements WidgetRealizationInterface
{
    private $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
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