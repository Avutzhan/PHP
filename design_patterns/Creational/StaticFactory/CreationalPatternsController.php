<?php

namespace App\Http\Controllers;

use App\StaticFactory\StaticFactory;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function StaticFactory()
    {
        $name = "Static Factory";

        $appMailMessenger = StaticFactory::build('email');
        $appPhoneMessenger = StaticFactory::build('sms');

        Debugbar::info($appMailMessenger, $appPhoneMessenger);

        return view('welcome');
    }
}
