<?php


namespace App\SimpleFactory\Interfaces;


interface MessengerInterface
{
    public function setSender($value);

    public function setRecipient($value);

    public function setMessage($value);

    public function send();

}