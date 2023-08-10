<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    $string = str_split($s);
    $zeroes = $ones = 0;

    for($j = 0; $j < $n; $j++) {
        if($string[$j] == 0) {
            $zeroes++;
        } else {
            $ones++;
        }
    }
    
    $flips = 0;
    if($zeroes == $ones) {
        $flips = $ones; 
    } elseif($ones == $n) {
        $flips = 1;
    } elseif($zeroes == $n) {
        $flips = 0;
    } elseif($zeroes > $ones) {
        $flips = $ones;  
    } elseif($ones > $zeroes) {
        $flips = $zeroes + 1;
    }
    
    print($flips . PHP_EOL);
}
