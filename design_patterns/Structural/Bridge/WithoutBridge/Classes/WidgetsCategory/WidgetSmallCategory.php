<?php


namespace App\Bridge\WithoutBridge\Classes\WidgetsCategory;


use App\Bridge\Entities\Category;
use App\Bridge\WithoutBridge\Classes\WidgetAbstract;
use Illuminate\Support\Str;

class WidgetSmallCategory extends WidgetAbstract
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $smallTItle = Str::limit($category->name, 7);
        $description = $category->description;

        return compact('id', 'smallTItle', 'description');
    }
}