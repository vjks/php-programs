<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b) = explode(' ', readline());
    
    $higher = max($a, $b);
    $limak = $bob = 0;
    // We need to check for one higher than the max of a and b since,
    // we need to verify if the other person has also reached his 
    //eating limit after the max eating limit has already been reached. 
    for($j = 1; $j <= $higher + 1; $j++) {
        if($j % 2 == 1) {
            $limak += $j;
            if($limak > $a) {
                print("Bob\n");
                break;
            }
        } else {
            $bob += $j;
            if($bob > $b) {
                print("Limak\n");
                break;
            } 
        }
    }
}