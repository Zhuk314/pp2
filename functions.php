<?php
//p
function printArr(array $array) {
    echo "{";

    foreach($array as $value){
        echo "<span> $value </span>";
    }

    echo "}";
}

// Return the largest value of array
function largest(array $array) {
    // create a variable to hold hte largest value
    $largest = $array[0];

    // loop trough the array to find largest value
    for($i=1; $i<sizeof($array); $i++) {
        if($i > $largest){
            $largest = $i;
        }
    }

    return $largest;
}