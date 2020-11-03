<?php


namespace App\Bridge\WithoutBridge\Classes\WidgetsProduct;


use App\Bridge\Entities\Product;
use App\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetMiddleProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $middleTItle = $product->id . '->' . $product->name;
        $description = $product->description;

        return compact('id', 'middleTItle', 'description');
    }
}