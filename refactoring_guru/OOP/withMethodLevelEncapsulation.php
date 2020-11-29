<?php
//now we added encapsulation
//when we change country or tax amount we will change just getTaxAmount method

class Total
{
    public function getOrderTotal($order)
    {
        $total = 0;
        foreach ($order->items as $item) {
            $total += $item->price * $item->quantity;
        }

        $total += $this->getTaxAmount($order->country);

        return $total;
    }

    public function getTaxAmount($country)
    {
        if ($country == "US") {
            return 2;
        } else if ($country == "KZ") {
            return 100;
        } else {
            return 0;
        }
    }
}

class Order
{
    public $items;
    public $country;

    public function __construct($items, $country)
    {
        $this->items = $items;
        $this->country = $country;
    }
}

class Item
{
    public $price;
    public $quantity;

    public function __construct($price, $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

$item1 = new Item(5, 10);
$item2 = new Item(2, 2);
$order = new Order([$item1, $item2], "KZ");
$total = new Total();

echo $total->getOrderTotal($order);

