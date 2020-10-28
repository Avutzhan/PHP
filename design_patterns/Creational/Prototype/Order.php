<?php


namespace App\Prototype;


use Carbon\Carbon;

class Order
{
    public $id;

    public $deliveryDt;

    private $client;

    public function __construct($id, Carbon $deliveryDt, Client $client)
    {
        $this->id = $id;

        $this->deliveryDt = $deliveryDt;

        $this->client = $client;


    }
    //во время клонирования происходит изменение некоторых данных
    //из за этого используем эту функцию чтобы улучшить качество клонов
    public function __clone()
    {
        $this->id = $this->id . '_copy';
        $this->deliveryDt = $this->deliveryDt->copy();

        $this->client->addOrder($this);

    }
}