<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b, $c, $d) = explode(' ', readline());
    
    if($a < $b) {
        $a += $c;
    } else {
        $b += $c;
    }
    
    if($a < $b) {
        $a += $d;
    } else {
        $b += $d;
    }
    
    if($a >= $b) {
        print("N\n");
    } else {
        print("S\n");
    }
}
