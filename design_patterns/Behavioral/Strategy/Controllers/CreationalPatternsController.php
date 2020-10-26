<?php

namespace App\Http\Controllers;

use App\Singleton\AdvancedSingleton;
use App\Singleton\Contracts\AnotherConnection;
use App\Singleton\LaravelSingleton;
use App\Singleton\SimpleSingleton;
use App\Strategy\SalaryManager;
use App\User;
use Barryvdh\Debugbar\Facade as Debugbar;
use Carbon\Carbon;

class CreationalPatternsController extends Controller
{
    public function Strategy()
    {
        $name = "Strategy";

        $period = [
            Carbon::now()->subMonth()->startOfMonth(),
            Carbon::now()->subMonth()->endOfMonth()
        ];

        $users = User::all();

        $result = (new SalaryManager($period, $users))->handle();

        //<Laravel-way способ создания Одиночки

        Debugbar::info($result);

        return view('welcome');
    }
}
