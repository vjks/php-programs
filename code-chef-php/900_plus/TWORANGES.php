<?php

$t = readline();

$i = 0;
do {
    list($a, $b, $c, $d) = explode(" ", readline());
    $count = 0;
    for($j = 1; $j <= 8; $j++) {
        if($j >= $a and $j <= $b or $j >= $c and $j <= $d) {
            $count++;
        }
    }
    print($count . PHP_EOL);
    $i++;
} while($i < $t);