<?php


namespace App\EventChannel;


interface PublisherInterface
{
    public function publish($data);
}