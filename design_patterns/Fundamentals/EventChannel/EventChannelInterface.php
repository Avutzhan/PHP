<?php


namespace App\EventChannel;


interface EventChannelInterface
{
    public function publish($topic, $data);

    public function subscribe($topic, SubscriberInterface $subscriber);
}