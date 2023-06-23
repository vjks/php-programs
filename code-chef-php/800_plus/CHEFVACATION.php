<?php

$t = readline();

$i = 0; 
do {
    list($x, $y, $z) = explode(" ", readline());
    
    if($x + $y <= $z)
        print("YES" . PHP_EOL);
    else {
        print("NO" . PHP_EOL);
    }
    $i++;
} while($i < $t);