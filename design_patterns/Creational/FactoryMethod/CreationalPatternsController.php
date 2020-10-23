<?php

namespace App\Http\Controllers;

use App\FactoryMethod\Classes\Forms\BootstrapDialogForm;
use App\FactoryMethod\Classes\Forms\SemanticUiDialogForm;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function FactoryMethod()
    {
        $name = 'Фабричный метод';
        //switch classes here
        $dialogForm = new BootstrapDialogForm();
//        $dialogForm = new SemanticUiDialogForm();
        $result = $dialogForm->render();

        Debugbar::info($result);

        return view('welcome');
    }
}
