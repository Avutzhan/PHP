<?php


namespace App\Prototype;


class Client
{
    public $id;

    public $name;

    public $orders;

    public function __construct($id, $name)
    {
        $this->id = $id;

        $this->name = $name;
    }

    public function addOrder(Order $order)
    {
        $this->orders[$order->id] = $order;
    }

}