<?php

//Тестирование кода
Route::get('/test', function () {
    $name = 'Конейнер свойств';

    $item = new \App\PropertyContainer\BlogPost();

    $item->setTitle('Заголовок Статьи');
    $item->setCategory(10);

    $item->addProperty('view_count', 100);

    $item->addProperty('last_update', '1');
    $item->setProperty('last_update', '2');

    $item->addProperty('read_only', '2');
    $item->deleteProperty('read_only');

    dd($item);
});