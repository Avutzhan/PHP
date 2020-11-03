<?php


namespace App\Bridge\WithoutBridge\Classes\WidgetsProduct;


use App\Bridge\Entities\Product;
use App\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetBigProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $fullTItle = $product->id . '...' . $product->name;
        $description = $product->description;

        return compact('id', 'fullTItle', 'description');
    }
}