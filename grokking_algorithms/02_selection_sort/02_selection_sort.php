<?php

//все тоже самое что и первый пример только почему то тут передали массив по ссылке
//так как входящий массив не модифицируем я убрал & он тут не нужен
function findSmallest($list)
{
    $small = $list[0];
    $index = 0;
    for($i = $index, $len = count($list); $i < $len; $i++) {
        if($list[$i] < $small) {
            $small = $list[$i];
            $index = $i;
        }
    }
    return $index;
}

//тут тоже самое что и в первом примере только там использовали для вставки нового элемента
//array_push а тут напрямую вставили
//еще вывод результата кривой какой то был при тестах удобнее использовать var_dump он информативнее
function selectionSort($list)
{
    $sorted = [];
    for($i = 0, $len = count($list); $i < $len; $i++) {
        $index = findSmallest($list);
        $sorted[] = array_splice($list, $index, 1)[0];
    }
    return $sorted;
}

var_dump(selectionSort([5, 3, 6, 2, 10])); // [2, 3, 5, 6, 10]

