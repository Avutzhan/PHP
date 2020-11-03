<?php

namespace App\Http\Controllers;

use App\Bridge\WithBridge\BridgeDemo;
use App\Bridge\WithoutBridge\WithoutBridgeDemo;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function Bridge()
    {
        $name = "Bridge";

//        (new WithoutBridgeDemo())->run();
        (new BridgeDemo())->run();

        return view('welcome');
    }
}
