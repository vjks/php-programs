<?php

$t = readline();

$i = 0; 
do {
    list($x, $y) = explode(" ", readline());
    
    print($y - $x . PHP_EOL);
    
    $i++;
} while($i < $t);