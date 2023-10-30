<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k, $s) = explode(' ', readline());
    
    $sum_n = $n * $n;
    
    $j = 1;
    for($count = 0; $count < $n;) {
        if($j % 2 != 0) {
            $total = $j * $k + $sum_n - $j;
            if($total == $s) {
                break;
            } 
            $count++;
        }
        $j++;
    }
    print($j . PHP_EOL);
}