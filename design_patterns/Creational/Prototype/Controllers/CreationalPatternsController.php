<?php

namespace App\Http\Controllers;

use App\Builder\BlogPostBuilder;
use App\Builder\BlogPostManager;
use App\LazyInitialization\LazyInitialization;
use App\Multiton\SimpleMultiton;
use App\Multiton\SimpleMultitonNext;
use App\Prototype\PrototypeDemo;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function Prototype()
    {
        $name = "Прототип";

        $prototypeDemo = new PrototypeDemo();
        $result = $prototypeDemo->run();

        Debugbar::info($result);

        return view('welcome');
    }
}
