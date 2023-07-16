<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $m) = explode(' ', readline());
    
    $tiles = 0;
    if($n % 2 == 0 and $m % 2 == 0) {
        $tiles = 0;
    } elseif($n % 2 == 0 and $m % 2 != 0) {
        $tiles = $n;
    } elseif($n % 2 != 0 and $m % 2 == 0) {
        $tiles = $m;
    } elseif($n % 2 != 0 and $m % 2 != 0) {
        $tiles = ($n + $m) - 1;
    }
    
    print($tiles. PHP_EOL);
}
