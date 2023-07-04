<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $x = readline();
    $prize = 100 * $x;
    
    $results = readline();
    $points = 0;
    for($j = 0; $j < 14; $j++) {
        if($results[$j] == 'C') {
            $points += 2;
        } else if($results[$j] == 'D') {
            $points++;
        }
    }
    if($points > 14) {
        print(60 * $x . PHP_EOL);
    } elseif($points == 14) {
        print(55 * $x . PHP_EOL);
    } else {
        print(40 * $x . PHP_EOL);
    }
}