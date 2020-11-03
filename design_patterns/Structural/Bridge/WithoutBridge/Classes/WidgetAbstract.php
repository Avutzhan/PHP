<?php


namespace App\Bridge\WithoutBridge\Classes;

use Barryvdh\Debugbar\Facade as Debugbar;

class WidgetAbstract
{



    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) . '..' . __FUNCTION__;
        Debugbar::info($method, $viewData);
    }
}