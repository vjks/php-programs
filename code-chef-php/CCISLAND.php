<?php

$t = readline();

$i = 0; 
do {
    list($x, $y, $xr, $yr, $d) = explode(" ", readline());
    $water_usage = $y / $yr;
    $food_usage = $x / $xr;
    if(min($water_usage, $food_usage) < $d) {
        print('NO' . PHP_EOL);
    } else {
        print('YES' . PHP_EOL);
    }
    $i++;
} while($i < $t);