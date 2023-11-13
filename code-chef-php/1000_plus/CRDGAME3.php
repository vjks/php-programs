<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($c, $r) = explode(' ', readline());
    $c_digits = ceil($c / 9);
    $r_digits = ceil($r / 9);
    
    $win = '';
    
    if($c_digits == $r_digits or $r_digits < $c_digits) {
        print(1 . ' ' . $r_digits . PHP_EOL);
    } elseif($c_digits < $r_digits) {
        print(0 . ' ' . $c_digits . PHP_EOL);
    }
}