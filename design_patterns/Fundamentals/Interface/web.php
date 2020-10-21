<?php

Route::get('/test', function () {
    $name = "Event channel";

    $item = new \App\EventChannel\EventChannelJob(); //вот это класс интерфейс высокого уровня
    $item->run(); //это рычажек интерфейса

    return view('welcome');
});