<?php

$t = readline();

$i = 0; 
do {
    $n = readline();
    $runs = explode(" ", readline());
    $count = $sum = 0;
    $j = 0;
    do {
        $sum = $sum + $runs[$j];
        $strike_rate = ($sum / ($j + 1)) * 100;
        if($strike_rate == 100)
            $count++;
        $j++;
    } while($j < $n);
    print($count . PHP_EOL);
    $i++;
} while($i < $t);

