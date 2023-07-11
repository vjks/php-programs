<?php

function sum($n) {
    $s = 0;
    for($k = 1; $k <= $n; $k++) {
        $s += $k;
    } 
    return $s;
}

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($d, $n) = explode(' ', readline());
    
    while($d > 0) {
        $n = sum($n);
        $d--;
    }
    
    print($n . PHP_EOL);
}
