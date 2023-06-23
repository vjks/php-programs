<?php

$t = readline();

$i = 0;
do {
    list($g1, $s1, $b1, $g2, $s2, $b2) = explode(" ", readline());
    
    if(($g1 + $s1 + $b1) > ($g2 + $s2 + $b2)) {
        print(1 . PHP_EOL);
    } else {
        print(2 . PHP_EOL);
    }
    $i++;
} while($i < $t);