<?php

$t = readline();

$i = 0; 
do {
    list($first, $second, $third) = explode(" ", readline());
    list($x, $y) = explode(" ", readline());
    
    $preference = '';
    
    if($first == $x or $first == $y) {
        $preference = $first;
    } elseif($second == $x or $second == $y) {
        $preference = $second;
    } elseif($third == $x or $third == $y) {
        $preference = $third;
    }
    
    print($preference . PHP_EOL);
    $i++;
} while($i < $t);
