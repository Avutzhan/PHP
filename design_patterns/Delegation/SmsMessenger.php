<?php


namespace App\Delegation;

use Barryvdh\Debugbar\Facade as Debugbar;

//Рабочий класс который на себя берет отправку смс
class SmsMessenger extends AbstractMessenger
{
    public function send()
    {
        Debugbar::info('sent by ' . __METHOD__ );

        return parent::send();
    }
}