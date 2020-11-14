<?php

function recursiveMax($list) {
    //базовый случай это сравнение двух элементов
    //если первый элемент больше второго вернем его если нет то второй все просто
    if (count($list) === 2) {
        return $list[0] > $list[1] ? $list[0] : $list[1];
    }
    //если в массиве больше двух элементов то
    //то вызываем рекурсивно функцию и передаем ей массив минус первый элемент
    $subMax = recursiveMax(array_splice($list, 1));
    //если первый элемент больше суб макса то выводим его если нет то субмакс
    return $list[0] > $subMax ? $list[0] : $subMax;
}

echo recursiveMax([1, 5, 25]); // 25
//call 1
//recursiveMax([1, 5, 25]);
//$subMax = recursiveMax([5, 25]);
//          this will match with base case
//          and return 5 > 25 ? 5 : 25 will return 25
//so return 1 > 25 ? 1 : 25 will return 25

echo recursiveMax([1, 5, 10, 25, 16, 1]); // 25
//call 1
//recursiveMax([1, 5, 10, 25, 16, 1]); //25
//not base case
//recursive case
//$subMax = recursiveMax([5, 10, 25, 16, 1]); //25 we will pause actual function and begin new function execution
//return 1 > 25 ? 1 : 25 will return 25
//          not base case
//          recursive case
//          $subMax = recursiveMax([10, 25, 16, 1]); // 25 pause
//          return 5 > 25 ? 5 : 25 will return 25
//                    not base case
//                    recursive case
//                    $subMax = recursiveMax([25, 16, 1]); // 25 pause
//                    return 10 > 25 ? 10 : 25 will return 25
//                              not base case
//                              recursive case
//                              $subMax = recursiveMax([16, 1]); //16 this will match with base case
//                              return 1 > 16 ? 1 : 16 will return 16 from here to the top
//                              so return 25 > 16 ? 25 : 16 will return 25


