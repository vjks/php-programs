<?php

$t = readline();
for($i = 0; $i < $t; $i++) {
    $n = readline();
    $a = explode(' ', readline());
    
    $sum = array_sum($a);
    $mean = $sum / $n;
    
    $pos = 0;
    for($j = 0; $j < $n; $j++) {
        $new_mean = ($sum - $a[$j]) / ($n - 1);
        if($new_mean == $mean) {
            $pos = $j + 1;
            break;
        }
    }
    
    if($pos == 0) {
        print("Impossible" . PHP_EOL);
    } else {
        print($pos. PHP_EOL);    
    }
}