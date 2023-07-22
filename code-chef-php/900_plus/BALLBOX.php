<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', readline());
    $satisfied = "NO\n";
    $sum_of_k = $k * ($k + 1) / 2;
    if($n > 1 and $k > 1 and $n == $k) {
        $satisfied = "NO\n";
    } if($n == 1 and $k == 1) {
        $satisfied = "YES\n";
    } elseif($n >= $sum_of_k) {
        $satisfied = "YES\n";
    } 
    print($satisfied);
}