<?php
/**
 * Created by PhpStorm.
 * User: brook
 * Date: 1/4/2019
 * Time: 10:26 AM
 */

function printArray($numbers){
    foreach($numbers as $num){
        echo "<p>$num</p>";
    }
}

function largest($numbers){
    echo max($numbers);
}

function average($numbers){
    $average = array_sum($numbers)/count($numbers);
    echo $average;
}

function removeDups($numbers){
    $numbers = array_unique($numbers, SORT_REGULAR);
    print_r($numbers);
}

function distribution($numbers){
    $duplicates = array_count_values($numbers);
    ksort($duplicates);
    print_r($duplicates);
}