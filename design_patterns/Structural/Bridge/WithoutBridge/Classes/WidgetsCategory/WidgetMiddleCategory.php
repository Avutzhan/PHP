<?php


namespace App\Bridge\WithoutBridge\Classes\WidgetsCategory;


use App\Bridge\Entities\Category;
use App\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetMiddleCategory extends WidgetAbstract
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $middleTItle = $category->id . '->' . $category->name;
        $description = $category->description;

        return compact('id', 'middleTItle', 'description');
    }
}