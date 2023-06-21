<?php

$tests = readline();
 
$i = 0; 
do {
    list($a, $b) = explode(" ", readline());
    if(($b - $a) % 3 == 0 or (($b - $a) - 1) % 3 == 0)
        print("YES\n");
    else {
        print("NO\n");
    }
    $i++;
} while($i < $tests);