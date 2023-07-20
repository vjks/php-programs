<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($x, $y, $k) = explode(' ', readline());
    
    if($x % $k == 0 and $y % $k == 0) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}