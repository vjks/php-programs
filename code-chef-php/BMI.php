<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($m, $h) = explode(" ", readline());
    
    $bmi = $m / pow($h,2);
    
    if($bmi <= 18) {
        echo 1 . PHP_EOL;
    } elseif($bmi >= 19 and $bmi <= 24) {
        echo 2 . PHP_EOL;
    } elseif($bmi >= 25 and $bmi <= 29) {
        echo 3 . PHP_EOL;
    } elseif($bmi >= 30) {
        echo 4 . PHP_EOL;
    }
}