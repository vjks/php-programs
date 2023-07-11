<?php

$n = readline();

for($i = 0; $i < $n; $i++) {
    $array = explode(' ', readline());
    
    $zeroes = $ones = 0;
    
    for($j = 0; $j < 5; $j++) {
        if($array[$j] == 0) {
            $zeroes++;
        } else {
            $ones++;
        }
    }
    
    if($ones == 0) {
        print("Beginner\n");
    } elseif($ones == 1) {
        print("Junior Developer\n");
    } elseif($ones == 2) {
        print("Middle Developer\n");
    } elseif($ones == 3) {
        print("Senior Developer\n");
    } elseif($ones == 4) {
        print("Hacker\n");
    } elseif($ones == 5) {
        print("Jeff Dean\n");
    } else {
        print("ERROR\n");
    }
}