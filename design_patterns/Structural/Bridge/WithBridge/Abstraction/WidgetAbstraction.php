<?php


namespace App\Bridge\WithBridge\Abstraction;

use Barryvdh\Debugbar\Facade as Debugbar;

class WidgetAbstraction
{
    protected $realization;

    public function setRealization($realization)
    {
        $this->realization = $realization;
    }

    public function getRealization()
    {
        return $this->realization;
    }

    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) . '...' . __FUNCTION__;
        Debugbar::info($method, $viewData);
    }
}