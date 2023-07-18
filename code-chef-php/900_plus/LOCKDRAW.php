<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b, $c) = explode(' ', readline());
    
    if($a == $b + $c or $b == $a + $c or $c == $a + $b) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}