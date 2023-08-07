<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array_n = explode(' ', readline());
    $x = array_count_values($array_n);
    $max = max($x);
    
    print($n - $max . PHP_EOL);
}