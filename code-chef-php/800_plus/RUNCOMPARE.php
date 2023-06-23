<?php

$t = readline();

$i = 0; 
do { 
    $n = readline();
    $count = 0;
    $alice_distances = explode(" ", readline());
    $bob_distances = explode(" ", readline());
    $j = 0;
    do {
        if($alice_distances[$j] > (2 * $bob_distances[$j]) or $bob_distances[$j] > (2 * $alice_distances[$j]))
            $count++;
        $j++;
    } while($j < $n);
    print($n - $count . PHP_EOL);
    $i++;
} while($i < $t);