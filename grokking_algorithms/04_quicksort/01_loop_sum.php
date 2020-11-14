<?php

function sum(array $arr)
{
    $total = 0;
    for ($x = 0; $x < count($arr); $x++) {
        //каждое значение массива добавляем друг к другу
        $total += $arr[$x];
    }
    return $total;
}

echo  sum([1, 2, 3, 4]); // 10
