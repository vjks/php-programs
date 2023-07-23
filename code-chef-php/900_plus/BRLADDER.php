<?php

$q = readline();

for($i = 0; $i < $q; $i++) { 
    list($a, $b) = explode(' ', readline());
    
    if(abs($a - $b) == 1 and min($a, $b) % 2 != 0 and max($a, $b) % 2 == 0) {
        print("YES\n");
    } elseif($a % 2 == 0 and $b % 2 == 0 and abs($a - $b) == 2) {
        print("YES\n");
    } elseif($a % 2 != 0 and $b % 2 != 0 and abs($a - $b) == 2) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}
