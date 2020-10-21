<?php


namespace App\EventChannel;

use Barryvdh\Debugbar\Facade as Debugbar;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        $msg = "{$this->getName()} оповещен(-а) данными [{$data}]";

        Debugbar::info($msg);
    }

    public function getName()
    {
        return $this->name;
    }
}