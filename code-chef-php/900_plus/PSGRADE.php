<?php

$t = readline();

$i = 0;
do {
    list($am, $bm, $cm, $tm, $a, $b, $c) = explode(" ", readline());
    
    if($am <= $a and $bm <= $b and $cm <= $c and $a + $b + $c >= $tm) {
        print("YES\n");
    } else {
        print("NO\n");
    }
    $i++;
} while($i < $t);
