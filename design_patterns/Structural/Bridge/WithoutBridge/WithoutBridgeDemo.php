<?php


namespace App\Bridge\WithoutBridge;


use App\Bridge\Entities\Category;
use App\Bridge\Entities\Product;
use App\Bridge\WithoutBridge\Classes\WidgetsCategory\WidgetBigCategory;
use App\Bridge\WithoutBridge\Classes\WidgetsCategory\WidgetMiddleCategory;
use App\Bridge\WithoutBridge\Classes\WidgetsCategory\WidgetSmallCategory;
use App\Bridge\WithoutBridge\Classes\WidgetsProduct\WidgetBigProduct;
use App\Bridge\WithoutBridge\Classes\WidgetsProduct\WidgetMiddleProduct;
use App\Bridge\WithoutBridge\Classes\WidgetsProduct\WidgetSmallProduct;

class WithoutBridgeDemo
{
    public function run()
    {
        $product = new Product();
        (new WidgetBigProduct())->run($product);
        (new WidgetMiddleProduct())->run($product);
        (new WidgetSmallProduct())->run($product);

        $category = new Category();
        (new WidgetBigCategory())->run($category);
        (new WidgetMiddleCategory())->run($category);
        (new WidgetSmallCategory())->run($category);
    }
}