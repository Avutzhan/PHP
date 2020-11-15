<?php

function quicksort(array $array) {
    if (count($array) < 2) {
        // base case, arrays with 0 or 1 element are already "sorted"
        return $array;
    }
    // recursive case
    $pivot = $array[0];
    var_dump($array);
    var_dump($pivot);

    // sub-array of all the elements less than the pivot
    $less = array_filter(array_slice($array, 1), function($el) use ($pivot) { return $el <= $pivot; });
    var_dump($less);
    // sub-array of all the elements greater than the pivot
    $greater = array_filter(array_slice($array, 1), function($el) use ($pivot) { return $el > $pivot; });
    var_dump($greater);
    return array_merge(quicksort($less), [$pivot], quicksort($greater));

}

var_dump(quicksort([10, 5, 2, 3])); // [2, 3, 5, 10]

//call 1
//quicksort([10, 5, 2, 3]) // [2, 3, 5, 10]
//not base case
//recursive case
//var_dump($array) = [10, 5, 2, 3]
//var_dump($pivot); = 10
//$less = [5, 2, 3]
//$greater = [] //already sorted
//call 2 call 3
//quicksort([5, 2, 3]) 10 quicksort([]) will return [] // 2, 3, 5, 10
//not base case
//recursive case
//var_dump($array) = [5, 2, 3]
//var_dump($pivot); = 5
//$less = [2, 3]
//$greater = [] //already sorted
//call 4 call 5
//quicksort([2, 3]) will return 2, 3  [5] quicksort([]) will return [] // [2, 3, 5]
//this is base case