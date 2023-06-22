<?php

$t = readline();

$i = 0; 
do {
    $n = readline();
    $winner_points = ($n-1) * 3;
    if(($n - 2) % 2 == 0) {
        $second_points = (($n - 2) / 2) * 3;
    } else {
        $second_points = ((($n - 2) + 1) / 2) * 3;
    }
    print($winner_points - $second_points . PHP_EOL);
    
    $i++;
} while($i < $t);