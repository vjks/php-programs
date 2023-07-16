<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array = explode(' ', readline());
    $prize = 0;
    for($j = 0; $j < $n; $j++) {
        $prize += $array[$j];    
    }
    print($prize - min($array) . PHP_EOL);
}