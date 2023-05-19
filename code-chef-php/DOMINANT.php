<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b, $c) = explode(" ", readline());
    
    if($a > $b + $c) {
        print("YES\n");
    } elseif ($b > $a + $c) {
        print("YES\n");
    } elseif ($c > $a + $b) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}