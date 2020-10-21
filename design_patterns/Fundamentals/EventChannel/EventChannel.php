<?php


namespace App\EventChannel;

use Barryvdh\Debugbar\Facade as Debugbar;

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        $msg = "{$subscriber->getName()} подписан(-a) на [{$topic}]";
        Debugbar::info($msg);
    }

    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}