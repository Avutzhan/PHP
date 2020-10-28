<?php


namespace App\Prototype;


use Carbon\Carbon;

class PrototypeDemo
{
    public function run()
    {
        $client = new Client(2, 'client');

        $deliveryDt = Carbon::parse('31.12.2030 15:00:00');
        $order = new Order(11, $deliveryDt, $client);

        $client->addOrder($order);

        $cloneOrder = clone $order;
        $cloneOrder->deliveryDt->addDay();

        return compact('client', 'order', 'cloneOrder');
    }

}