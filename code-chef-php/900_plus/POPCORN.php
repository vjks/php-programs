<?php

$t = readline();

for($i = 0; $i < $t; $i++) { 
    list($a1, $a2) = explode(' ', readline());
    list($b1, $b2) = explode(' ', readline());
    list($c1, $c2) = explode(' ', readline());
    
    $combo1 = $a1 + $a2;
    $combo2 = $b1 + $b2;
    $combo3 = $c1 + $c2;
    
    $max = max($combo1, $combo2, $combo3);
    print($max . PHP_EOL);
}