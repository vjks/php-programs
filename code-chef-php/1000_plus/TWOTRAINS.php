<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $p = explode(' ', readline());
    
    $sum = array_sum($p);
    $max = max($p);
    print($sum + $max . PHP_EOL);
}