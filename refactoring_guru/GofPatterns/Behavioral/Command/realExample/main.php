<?php

include_once("Classes/Queue.php");
include_once("Classes/IMDBGenresScrapingCommand.php");

$queue = Queue::get();

if ($queue->isEmpty()) {
    $queue->add(new IMDBGenresScrapingCommand());
}

$queue->work();