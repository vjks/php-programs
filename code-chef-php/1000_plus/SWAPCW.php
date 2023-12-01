<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();

    for($j = 0; $j < floor($n / 2); $j++) {
        if(ord($s[$j]) > ord($s[$n - 1 - $j])) {
            $temp = $s[$j];
            $s[$j] = $s[$n - 1 - $j];
            $s[$n - 1 - $j] = $temp;
        }
    }

    $possible = true;
    
    for($k = 0; $k < $n - 1; $k++) {
        if(ord($s[$k]) > ord($s[$k + 1])) {
            $possible = false;
            break;
        }
    }
    
    if($possible) {
        print('Yes' . PHP_EOL);
    } else {
        print('No' . PHP_EOL);
    }
}