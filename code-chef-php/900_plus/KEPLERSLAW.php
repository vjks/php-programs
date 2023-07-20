<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($t1, $t2, $r1, $r2) = explode(' ', readline());
    
    $p1 = pow($t1, 2) / pow($r1, 3);
    $p2 = pow($t2, 2) / pow($r2, 3);
    if($p1 == $p2)
        print("YES\n");
    else {
        print("NO\n");
    }
}