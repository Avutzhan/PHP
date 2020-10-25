<?php

namespace App\Http\Controllers;

use App\SimpleFactory\MessengerSimpleFactory;
use App\StaticFactory\StaticFactory;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function SimpleFactory()
    {
        $name = "Simple Factory";

        $factory = new MessengerSimpleFactory();

        $appMailMessenger = $factory->build('email');
        $appPhoneMessenger = $factory->build('sms');

        Debugbar::info($appMailMessenger, $appPhoneMessenger);

        return view('welcome');
    }
}
