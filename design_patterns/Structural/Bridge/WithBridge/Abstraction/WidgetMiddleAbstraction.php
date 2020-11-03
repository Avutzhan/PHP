<?php


namespace App\Bridge\WithBridge\Abstraction;


class WidgetMiddleAbstraction extends WidgetAbstraction
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
        $middleTitle = $this->getMiddleTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'middleTitle', 'description');
    }

    private function getMiddleTitle()
    {
        return $this->getRealization()->getId()
            . '->'
            . $this->getRealization()->getTitle();
    }
}