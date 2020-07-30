<?php

//iterative

function binarySearch(Array $arr, $x)
{
    // check for empty array
    if (count($arr) === 0) return false;
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {

        // compute middle index
        $mid = floor(($low + $high) / 2);

        // element found at mid
        if($arr[$mid] == $x) {
            return true;
        }

        if ($x < $arr[$mid]) {
            // search the left side of the array
            $high = $mid -1;
        }
        else {
            // search the right side of the array
            $low = $mid + 1;
        }
    }

    // If we reach here element x doesnt exist
    return false;
}

// Driver code
$arr = array(1, 2, 3, 4, 5);
$value = 5;
if(binarySearch($arr, $value) == true) {
    echo $value." Exists";
}
else {
    echo $value." Doesnt Exist";
}

//recursive

function binarySearch2(Array $arr, $start, $end, $x){
    if ($end < $start)
        return false;

    $mid = floor(($end + $start)/2);
    if ($arr[$mid] == $x)
        return true;

    elseif ($arr[$mid] > $x) {

        // call binarySearch on [start, mid - 1]
        return binarySearch($arr, $start, $mid - 1, $x);
    }
    else {

        // call binarySearch on [mid + 1, end]
        return binarySearch($arr, $mid + 1, $end, $x);
    }
}

// Driver code
$arr = array(1, 2, 3, 4, 5);
$value = 5;
if(binarySearch($arr, 0, count($arr) - 1, $value) == true) {
    echo $value." Exists";
}
else {
    echo $value." Doesnt Exist";
}

