<?php


namespace App\Bridge\WithoutBridge\Classes\WidgetsProduct;


use App\Bridge\Entities\Product;
use App\Bridge\WithoutBridge\Classes\WidgetAbstract;
use Illuminate\Support\Str;

class WidgetSmallProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $smallTItle = Str::limit($product->name, 7);
        $description = $product->description;

        return compact('id', 'smallTItle', 'description');
    }
}