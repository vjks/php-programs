<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $m) = explode(' ', readline());
    
    if($n % 2 == 0 or $m % 2 == 0) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}