<?php

$tests = readline();

$i = 0; 
do {
    list($n, $x) = explode(" ", readline());

    $partner = (2 * $n - $x) + 1;
   
    echo $partner . PHP_EOL;
    
    $i++;
} while($i < $tests);
