<?php


namespace App\Facade\Classes;


class Order
{
    public $deliveryDt;

    public $client;

    public $recipient;

    public function save()
    {
        return true;
    }
}