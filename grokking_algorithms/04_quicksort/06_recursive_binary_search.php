<?php
//получаем отсортированный массив и значение
//если это значение есть в массиве возвращаем индекс
//если нет то null или -1
//следим в какой части массива проводится поиск
//начало и конец
function recursiveBinarySearch($arr = array(), $val, $low, $high) {
    //debug
    if ($low > $high) {
        return -1;
    }
    //середина массива если значение не четно то округляем в меньшую сторону это индекс
    $mid = floor(($low + $high) / 2);

    //base case
    //если в массиве элемент под этим индексом равен искомому значению то возвращаем этот индекс
    if ($arr[$mid] == $val) {
        return $mid;
    }
    //recursive case
    //если значение под этим индексов больше искомого значения
    //то сдвигаем конец на середину если меньше то сдвигаем начало на середину получается отбрасываем половину в обоих случаях
    if ($arr[$mid] > $val) {
        return recursiveBinarySearch($arr, $val, $low, $mid - 1);
    }
    if ($arr[$mid] < $val) {
        return recursiveBinarySearch($arr, $val, $mid + 1, $high);
    }
}

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

echo recursiveBinarySearch($arr, 13, 0, count($arr)); // 12