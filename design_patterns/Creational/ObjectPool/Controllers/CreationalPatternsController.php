<?php

namespace App\Http\Controllers;

use App\ObjectPool\ObjectPoolDemo;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function ObjectPool()
    {
        $name = "ObjectPool";

        $objectPoolDemo = new ObjectPoolDemo();
        $objectPoolDemo->run();

        return view('welcome');
    }
}
