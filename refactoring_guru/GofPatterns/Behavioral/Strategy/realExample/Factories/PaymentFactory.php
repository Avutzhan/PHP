<?php

include_once("Strategies/CreditCardPayment.php");
include_once("Strategies/PayPalPayment.php");

class PaymentFactory
{
    public static function getPaymentMethod(string $id): PaymentMethod
    {
        switch ($id) {
            case "cc":
                return new CreditCardPayment();
            case "paypal":
                return new PayPalPayment();
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}