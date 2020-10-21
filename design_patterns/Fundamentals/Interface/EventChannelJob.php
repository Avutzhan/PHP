<?php


namespace App\EventChannel;

//тут много методов и классов которые делают работу

class EventChannelJob
{
    public function run()
    {
        $newsChannel = new EventChannel();

        $highGardenGroup = new Publisher('highgarden-news', $newsChannel);

        //два разных поставщика но одна новость то есть продукт один
        $winterFellNews = new Publisher('winterfell-news', $newsChannel);
        $winterFellDaily = new Publisher('winterfell-news', $newsChannel);

        $sansa = new Subscriber('Sansa Stark');
        $aria = new Subscriber('Aria Stark');
        $serseya = new Subscriber('Serseya Lannister');
        $snow = new Subscriber('John Snow');

        $newsChannel->subscribe('highgarden-news', $serseya);
        $newsChannel->subscribe('highgarden-news', $sansa);

        $newsChannel->subscribe('highgarden-news', $aria);
        $newsChannel->subscribe('winterfell-news', $aria);

        $newsChannel->subscribe('winterfell-news', $snow);

        $highGardenGroup->publish('New highgarden post');
        $winterFellNews->publish('New winterfell post');
        $winterFellDaily->publish('New alternative winterfell post');
    }
}