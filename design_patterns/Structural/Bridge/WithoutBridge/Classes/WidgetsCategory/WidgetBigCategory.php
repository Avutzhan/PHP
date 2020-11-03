<?php


namespace App\Bridge\WithoutBridge\Classes\WidgetsCategory;


use App\Bridge\Entities\Category;
use App\Bridge\WithoutBridge\Classes\WidgetAbstract;

class WidgetBigCategory extends WidgetAbstract
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $fullTItle = $category->id . '...' . $category->name;
        $description = $category->description;

        return compact('id', 'fullTItle', 'description');
    }
}