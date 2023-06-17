<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($n, $x) = explode(" ", readline());
    $lifetimes = explode(" ", readline());
    $sum = 0;
    for($j = 0; $j < $n - 1; $j++) {
        $sum += $lifetimes[$j];
    }
    
    $required_lifetime = $x * $n - $sum;
    if($required_lifetime <= 0) {
        echo 0 . PHP_EOL;
    } else {
        echo $required_lifetime . PHP_EOL;   
    }
}