<?php
//example of encapsulation at method level
//tax calculation rules are mixed with the main method code
//We can assume that the tax calculation code is most of all, it will change often
//Because of these changes, you will have to constantly touch getOrderTotal method

class Total
{
    public function getOrderTotal($order)
    {
        $total = 0;
        foreach ($order->items as $item) {
            $total += $item->price * $item->quantity;
        }

        if ($order->country == "US") {
            $total += 2;
        } else if($order->country == "KZ") {
            $total += 100;
        }

        return $total;
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

