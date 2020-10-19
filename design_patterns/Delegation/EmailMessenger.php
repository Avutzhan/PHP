<?php


namespace App\Delegation;

use Barryvdh\Debugbar\Facade as Debugbar;

//Рабочий класс кторый берет на себя отправку емаилов
class EmailMessenger extends AbstractMessenger
{
    public function send()
    {
        Debugbar::info('sent by ' . __METHOD__ );

        return parent::send();
    }
}