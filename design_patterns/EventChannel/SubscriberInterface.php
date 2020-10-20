<?php


namespace App\EventChannel;


interface SubscriberInterface
{
    public function notify($data);
}