<?php


namespace App\Bridge\WithBridge;


use App\Bridge\Entities\Category;
use App\Bridge\Entities\Product;
use App\Bridge\WithBridge\Abstraction\WidgetBigAbstraction;
use App\Bridge\WithBridge\Abstraction\WidgetMiddleAbstraction;
use App\Bridge\WithBridge\Abstraction\WidgetSmallAbstraction;
use App\Bridge\WithBridge\Realization\CategoryWidgetRealization;
use App\Bridge\WithBridge\Realization\ProductWidgetRealization;

class BridgeDemo
{
    public function run()
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}