<?php

function clientCode(Downloader $subject)
{
    // ...

    $result = $subject->download("http://example.com/");

    // Повторяющиеся запросы на загрузку могут кэшироваться для увеличения
    // скорости.

    $result = $subject->download("http://example.com/");

    // ...
}