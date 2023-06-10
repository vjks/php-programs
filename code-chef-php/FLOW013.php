<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b, $c) = explode(" ", readline());
    
    if($a + $b + $c == 180) 
        print("YES\n");
    else
        print("NO\n");
}