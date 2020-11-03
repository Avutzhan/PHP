<?php


namespace App\Bridge\WithBridge\Abstraction;


use Illuminate\Support\Str;

class WidgetSmallAbstraction extends WidgetAbstraction
{
    public function run($realization)
    {
        $this->setRealization($realization);

        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    private function getViewData()
    {
        $id = $this->getRealization()->getId();
        $smallTitle = $this->getSmallTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'smallTitle', 'description');
    }

    private function getSmallTitle()
    {
        return Str::limit($this->getRealization()->getTitle(), 5);
    }
}