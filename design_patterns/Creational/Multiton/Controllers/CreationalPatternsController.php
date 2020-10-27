<?php

namespace App\Http\Controllers;

use App\Multiton\SimpleMultiton;
use App\Multiton\SimpleMultitonNext;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function Multiton()
    {
        $name = "Multiton";

        $multiton[] = SimpleMultiton::getInstance('mysql')->setTest('mysql-test');
        $multiton[] = SimpleMultiton::getInstance('mongo');

        $multiton[] = SimpleMultiton::getInstance('mysql');
        $multiton[] = SimpleMultiton::getInstance('mongo')->setTest('mongo-test');

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init';

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init2';
        $multiton[] = $simpleMultitonNext;

        Debugbar::info($multiton);

        return view('welcome');
    }
}
