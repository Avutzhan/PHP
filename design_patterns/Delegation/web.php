<?php

//Тестирование кода

//Делегирование основной шаблон проектирования в котором обьект
// внешне выражает некоторое поведение но в реальности передает
// ответственность за выполнение этого поведения связанному обьекту.
// Шаблон делегирования является фундаментальной абстракцией на основе
// которой реализованы другие шаблоны как композиция
// так же называется как агрегация, примеси, аспекты

Route::get('/test', function () {
    $name = 'Delegation';

    $item = new \App\Delegation\AppMessenger();

    $item->setSender('sender@email.ru')
        ->setRecipient('recipient@email.ru')
        ->setMessage('Hello email')
        ->send();

    $item->toSms()
        ->setSender('77777777777')
        ->setRecipient('77755555555')
        ->setMessage('Hello sms')
        ->send();

    Debugbar::info($item);

    return view('welcome');

    //messages from debugbar
    //    sent by App\Delegation\EmailMessenger::send
    //info
    //    sent by App\Delegation\SmsMessenger::send
    //info
    //    App\Delegation\AppMessenger {#351 -messenger: App\Delegation\SmsMessenger {#347 #sender: "7777...
    //info
});