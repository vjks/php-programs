<?php

function isPalindrome($x) {
    if($x < 10)
        return true;
    else {
        $copy = $x;
        $reverse = 0;
        while($x != 0){
            $last_digit = floor($x % 10);
            $reverse = $reverse * 10 + $last_digit;
            $x = floor($x / 10);
        }
        if($copy == $reverse) {
            return true;
        } else {
            return false;
        }
    }
}

$t = readline();
for($i = 0; $i < $t; $i++) {
    list($l, $r) = explode(' ', readline());
    
    $pal_array = array();
    
    for(;$l <= $r; $l++) {
        $val = isPalindrome($l);
        if($val) {
            array_push($pal_array, $l);
        }
    }
    print(array_sum($pal_array) . PHP_EOL);
}