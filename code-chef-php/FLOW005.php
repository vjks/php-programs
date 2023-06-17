<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $sum = readline();
    $count = 0;
    for(;$sum > 0;) {
        if($sum >= 100) {
            $count += floor($sum / 100);
            $sum = $sum % 100;
        } elseif($sum >= 50 and $sum < 100) {
            $count += floor($sum / 50);
            $sum = $sum % 50;
        } elseif($sum >= 10 and $sum < 50) {
            $count += floor($sum / 10);
            $sum = $sum % 10;
            //echo "count is: " . $count . "sum is: " . $sum . PHP_EOL;
        } elseif($sum >= 5 and $sum < 10) {
            $count += floor($sum / 5);
            $sum = $sum % 5;
            //echo "here";
        } elseif($sum >= 2 and $sum < 5) {
            $count += floor($sum / 2);
            $sum = $sum % 2;

        } elseif($sum >= 1 and $sum < 2) {
            $count += floor($sum / 1);
            $sum = $sum % 1;
        }
    }
    print($count . PHP_EOL);
}
