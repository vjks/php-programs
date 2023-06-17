<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b) = explode(" ", readline());
    $sum = $a + $b;
    if($sum < 3) {
        echo 1 . PHP_EOL;
    } elseif($sum >= 3 and $sum <= 10) {
        echo 2 . PHP_EOL;  
    } elseif($sum >= 11 and $sum <= 60) {
        echo 3 . PHP_EOL;
    } elseif($sum > 60) {
        echo 4 . PHP_EOL;
    }
}
