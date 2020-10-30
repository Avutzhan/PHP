<?php


namespace App\Facade;


use App\Facade\Subsystem\OrderSaveDates;
use App\Facade\Subsystem\OrderSaveProducts;
use App\Facade\Subsystem\OrderSaveUsers;

class OrderSaveFacade
{
    public function save($order, $data)
    {
        (new OrderSaveProducts($order, $data))->run();

        (new OrderSaveDates($order, $data))->run();

        (new OrderSaveUsers($order, $data))->run();

        $order->save();

        return true;
    }
}