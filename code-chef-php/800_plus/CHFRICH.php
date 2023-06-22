<?php

$t = readline();

$i = 0; 
do {
    list($a, $b, $x) = explode(" ", readline());
    if($x == 0) 
        print(0 . PHP_EOL);
    else
        print(($b - $a) / $x . PHP_EOL);
    $i++;
} while($i < $t);
