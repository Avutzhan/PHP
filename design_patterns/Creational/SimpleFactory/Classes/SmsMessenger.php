<?php


namespace App\SimpleFactory\Classes;

use Barryvdh\Debugbar\Facade as Debugbar;

class SmsMessenger extends AbstractMessenger
{
    public function send()
    {
        Debugbar::info('sent by ' . __METHOD__ );

        return parent::send();
    }
}