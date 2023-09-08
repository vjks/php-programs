<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', readline());
    $a = explode(' ', readline());
    sort($a); // By sorting the array we can pop the last element and unset the first element.
    
    for($j = 0; $j < $k; $j++) {    // By running the loop k number of times, we'll remove k * 2 elements
       array_pop($a);
       unset($a[$j]);
    }
    
    // Divide the sum of the elements in the array by the total number of elements minus k * 2
    print(array_sum($a) / ($n - ($k * 2)) . PHP_EOL);
}