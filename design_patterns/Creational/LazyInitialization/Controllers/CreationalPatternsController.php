<?php

namespace App\Http\Controllers;

use App\Builder\BlogPostBuilder;
use App\Builder\BlogPostManager;
use App\LazyInitialization\LazyInitialization;
use App\Multiton\SimpleMultiton;
use App\Multiton\SimpleMultitonNext;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function LazyInit()
    {
        $name = "Lazy Initialization отложенная ленивая инициализация";

        $lazyLoad = new LazyInitialization();

        $user[] = $lazyLoad->getUser()->name;
        $user[] = $lazyLoad->getUser()->email;
        $user[] = $lazyLoad->getUser()->created_at;

        Debugbar::info($user);

        return view('welcome');
    }
}
