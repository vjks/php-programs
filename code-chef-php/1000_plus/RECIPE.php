<?php

function calc_gcd($x, $y) {
    $min = min($x, $y);
    $gcd = 0;
    for($i = 1; $i <= $min; $i++) {
        if($x % $i == 0 and $y % $i == 0) 
            $gcd = $i;
    }
    return $gcd;
}
$t = readline();

for($i = 0; $i < $t; $i++) {
    $inputs = explode(' ', readline());
    $len = array_shift($inputs);
    $min = min($inputs);
    
    $gcd = $inputs[0];
    
    for($m = 0; $m < count($inputs) - 1; $m++) {
        $gcd = calc_gcd($gcd, $inputs[$m + 1]);
    }
    
    for($l = 0; $l < $len; $l++) {
        $inputs[$l] = $inputs[$l] / $gcd;
    }
    
    for($k = 0; $k < $len; $k++) {
        if($k == $len - 1)
            $space = '';
        else {
            $space = ' ';
        }
        print($inputs[$k] . $space);
    }
    print(PHP_EOL);
}