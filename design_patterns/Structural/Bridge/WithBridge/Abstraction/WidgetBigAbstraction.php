<?php


namespace App\Bridge\WithBridge\Abstraction;


class WidgetBigAbstraction extends WidgetAbstraction
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
        $fullTitle = $this->getFullTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'fullTitle', 'description');
    }

    private function getFullTitle()
    {
        return $this->getRealization()->getId()
            . '....'
            . $this->getRealization()->getTitle();
    }
}