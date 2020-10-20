<?php


namespace App\EventChannel;


class Publisher implements PublisherInterface
{
    private $topic;

    private $eventChannel;

    public function __construct($topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;

        $this->eventChannel = $eventChannel;
    }

    public function publish($data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}