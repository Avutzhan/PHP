<?php

namespace App\Http\Controllers;

use App\Singleton\AdvancedSingleton;
use App\Singleton\Contracts\AnotherConnection;
use App\Singleton\LaravelSingleton;
use App\Singleton\SimpleSingleton;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function Singleton()
    {
        $name = "Singleton";

        //>Простой способ создания Одиночки
        $result['simpleSingleton1'] = SimpleSingleton::getInstance();
        $result['simpleSingleton1']->setTest('simpleSingleton1');
        $result['simpleSingleton2'] = SimpleSingleton::getInstance();

        $result[] = $result['simpleSingleton1'] === $result['simpleSingleton2'];
        //<Простой способ создания Одиночки


        //>Продвинутый способ создания Одиночки
        $result['advancedSingleton1'] = AdvancedSingleton::getInstance();
        $result['advancedSingleton1']->setTest('advancedSingleton1');
        $result['advancedSingleton2'] = AdvancedSingleton::getInstance();

        $result[] = $result['advancedSingleton1'] === $result['advancedSingleton2'];
        //<Продвинутый способ создания Одиночки


        //>Laravel-way способ создания Одиночки
        $result['laravelSingleton1'] = app(LaravelSingleton::class);
        $result['laravelSingleton1']->setTest('laravelSingleton1');
        $result['laravelSingleton2'] = app(LaravelSingleton::class);
        $result['laravelSingleton3'] = new LaravelSingleton();

        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton2'];
        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton3'];

        //<Laravel-way способ создания Одиночки

        Debugbar::info($result);

        return view('welcome');
    }
}
