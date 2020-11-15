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

//call 1
//recursiveBinarySearch($arr, 13, 0, count($arr)); //12
//incoming arr = 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15
//val = 13
//low = 0
//high = 15
//mid = 7
//arr[mid] = 8 != 13 so we will continue
//8 > 13 not true so we will continue
//8 > 13 true
//recursive case
//call 2
//return recursiveBinarySearch($arr, $val, $mid + 1, $high);
//incoming arr = 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15
//val = 13
//low = 8
//это означает что мы сдвигаем начало в середину и делаем поиск в правой половине
//...9,10,11,12,13,14,15 массива
//high = 15
//mid = 11 этот индекс уже в правой половине массива
//arr[mid] = 12
//12 != 13 so continue
//12 ? 13 not true continue
//12 < 13 true
//recursive case
//call 3
//return recursiveBinarySearch($arr, $val, $mid + 1, $high);
//incoming arr = 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15
//val = 13
//low = 12
//...13,14,15 сдвинули начало к середине
//high = 15
//mid = 13
//arr[mid] = 14
//14 != 13 so continue
//14 > 13 true
//recursive case
//return recursiveBinarySearch($arr, $val, $low, $mid - 1);
//incoming arr = 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15
//val = 13
//low = 12
//high = 12
//так как 14 > 13 то отбрасываем эту часть 14,15 массива так как там точно нет того что ищем то есть мы конец переносим св середину
//mid = 12
//arr[mid] = 13
//if ($arr[$mid] == $val) {
//    return $mid;
//}
//и наконец мы попадаем в базовый случай где значение середины массива равно искомому значению возвращаем индекс этого элемента