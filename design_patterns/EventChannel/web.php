<?php

Route::get('/test', function () {
    $name = "Event channel";

    $item = new \App\EventChannel\EventChannelJob();
    $item->run();

    return view('welcome');
});