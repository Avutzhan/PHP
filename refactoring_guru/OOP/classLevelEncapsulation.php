<?php
//Order objects will delegate tax calculation to a separate tax calculator object.
class TaxCalculator
{
    public function getTaxAmount($country)
    {
        if ($country == "US") {
            return $this->getUSTax();
        } else if ($country == "KZ") {
            return $this->getKZTax();
        } else {
            return 0;
        }
    }

    private function getUSTax()
    {
        return 2;
    }

    private function getKZTax()
    {
        return 100;
    }
}

class Order
{
    private $taxCalculator;
    private $items;
    private $country;

    public function __construct($items, $country, $taxCalculator)
    {
        $this->items = $items;
        $this->country = $country;
        $this->taxCalculator = $taxCalculator;
    }

    public function getOrderTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->price * $item->quantity;
        }

        $total += $this->taxCalculator->getTaxAmount($this->country);

        return $total;
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
$calculator = new TaxCalculator();
$order = new Order([$item1, $item2], "KZ", $calculator);


echo $order->getOrderTotal();

