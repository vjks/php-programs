<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b) = explode(' ', readline());
    $sum = $a + $b;
    $sticks = 0;
    while($sum != 0) {
        $num = $sum % 10;
        
        if($num == 1) {
            $sticks += 2;
        } elseif($num == 2) {
            $sticks += 5;
        } elseif($num == 3) {
            $sticks += 5;
        } elseif($num == 4) {
            $sticks += 4;
        } elseif($num == 5) {
            $sticks += 5;
        } elseif($num == 6) {
            $sticks += 6;
        } elseif($num == 7) {
            $sticks += 3;
        } elseif($num == 8) {
            $sticks += 7;
        } elseif($num == 9) {
            $sticks += 6;
        } elseif($num == 0) {
            $sticks += 6;
        }
        
        $sum = floor($sum / 10);
    }
    print($sticks . PHP_EOL);
}