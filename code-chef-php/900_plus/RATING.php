<?php

$t = readline();

$i = 0; 
do {
    $s = readline();
    
    $x = $s + 1;
    $y = -1;
    
    print($x * $y . PHP_EOL);
    
    $i++;
} while($i < $t);
