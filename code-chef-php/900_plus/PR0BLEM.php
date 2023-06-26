<?php

$t = readline();

$i = 0; 
do {
    list($n, $m) = explode(" ", readline());
    
    if(($n + $m) % 2 == 0) {
        print("YES\n");
    } else {
        print("NO\n");
    }
    $i++;
} while($i < $t);
