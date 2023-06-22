<?php

$tests = readline();

$i = 0; 
do {
    list($l, $r) = explode(" ", readline());
    $count = 0;
    do {
        if(($l % 10) == 2 or ($l % 10) == 3 or ($l % 10) == 9)
            $count++;
        $l++;
    } while($l <= $r);
    echo $count . PHP_EOL;
    $i++;
} while($i < $tests);

