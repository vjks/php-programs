<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b) = explode(' ', readline());
    
    $possible = false;
    
    if($a % 2 == 0 or $b % 2 == 0) {
        if($a > 1 and $b > 1) {
            $possible = true;   
        }
    } 
    if($possible) {
        print('Yes' . PHP_EOL);
    }else {
        print('No' . PHP_EOL);
    }
}