<?php


namespace App\Delegation;

//Создаем интерфейс чтобы понимать что будем делать
interface MessengerInterface
{
    public function setSender($value);

    public function setRecipient($value);

    public function setMessage($value);

    public function send();

}