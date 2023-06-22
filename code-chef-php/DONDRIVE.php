<?php

$t = readline();

$i = 0; 
do {
    list($n, $x) = explode(" ", readline());
    
    echo $n - $x . PHP_EOL;
    
    $i++;
} while($i < $t);