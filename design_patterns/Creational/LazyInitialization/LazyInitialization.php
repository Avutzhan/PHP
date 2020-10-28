<?php


namespace App\LazyInitialization;


use App\User;
use Barryvdh\Debugbar\Facade as Debugbar;

class LazyInitialization
{
    private $user = null;

    public function __construct()
    {
//        $this->user = User::first();
    }

    public function getUser()
    {
        if (is_null($this->user)) {
            $this->user = User::first();
            Debugbar::info('Init User');
        }

        return $this->user;
    }
}