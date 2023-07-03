<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array = explode(' ', readline());
    
    $max = $array[0] + $array[1];
    for($j = 0; $j < $n; $j++) {
        if($j == $n - 1) {
            $sum = $array[$n - 1] + $array[0];
        } else {
            $sum = $array[$j] + $array[$j + 1];   
        }
        if($sum > $max) 
            $max = $sum;
    }
    print($max . PHP_EOL);
}
