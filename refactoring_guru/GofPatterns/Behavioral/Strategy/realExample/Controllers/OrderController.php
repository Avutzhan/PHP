<?php

include_once("Models/Order.php");
include_once("Factories/PaymentFactory.php");

class OrderController
{
    public function post(string $url, array $data)
    {
        echo "Controller: POST request to $url with " . json_encode($data) . "\n";

        $path = parse_url($url, PHP_URL_PATH);

        if (preg_match('#^/orders?$#', $path, $matches)) {
            $this->postNewOrder($data);
        } else {
            echo "Controller: 404 page\n";
        }
    }

    public function get(string $url): void
    {
        echo "Controller: GET request to $url\n";

        $path = parse_url($url, PHP_URL_PATH);
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $data);

        if (preg_match('#^/orders?$#', $path, $matches)) {
            $this->getAllOrders();
        } elseif (preg_match('#^/order/([0-9]+?)/payment/([a-z]+?)(/return)?$#', $path, $matches)) {
            $order = Order::get($matches[1]);

            $paymentMethod = PaymentFactory::getPaymentMethod($matches[2]);

            if (!isset($matches[3])) {
                $this->getPayment($paymentMethod, $order, $data);
            } else {
                $this->getPaymentReturn($paymentMethod, $order, $data);
            }
        } else {
            echo "Controller: 404 page\n";
        }
    }

    public function postNewOrder(array $data): void
    {
        $order = new Order($data);
        echo "Controller: Created the order #{$order->id}.\n";
    }

    public function getAllOrders(): void
    {
        echo "Controller: Here's all orders:\n";
        foreach (Order::get() as $order) {
            echo json_encode($order, JSON_PRETTY_PRINT) . "\n";
        }
    }

    public function getPayment(PaymentMethod $method, Order $order, array $data): void
    {
        // Фактическая работа делегируется объекту метода оплаты.
        $form = $method->getPaymentForm($order);
        echo "Controller: here's the payment form:\n";
        echo $form . "\n";
    }

    public function getPaymentReturn(PaymentMethod $method, Order $order, array $data): void
    {
        try {
            // Другой тип работы, делегированный методу оплаты.
            if ($method->validateReturn($order, $data)) {
                echo "Controller: Thanks for your order!\n";
                $order->complete();
            }
        } catch (\Exception $e) {
            echo "Controller: got an exception (" . $e->getMessage() . ")\n";
        }
    }
}