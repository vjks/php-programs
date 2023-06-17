<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $array_size = readline();
    $integer_array = explode(" ", readline());
    
    $minimum = (int)$integer_array[0];
    $count = 0;
    for($k = 0; $k < $array_size; $k++) {
        //echo $integer_array[$k];
        if($integer_array[$k] < $minimum) {
            $minimum = $integer_array[$k];
            //echo "Integer array k is:" . $integer_array[$k];
        }
    }
    
    for($j = 0; $j < $array_size; $j++) {
        if($integer_array[$j] > $minimum) {
            $integer_array[$j] = $minimum;
            $count += 1;
        }
    }
    echo $count . PHP_EOL;
}