<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($to_measure, $x, $y, $z) = explode(" ", readline());
    if($to_measure == $x or $to_measure == $y or $to_measure == $z)
        print("YES\n");
    elseif($to_measure == ($x + $y) or $to_measure == ($y + $z) or $to_measure == ($z + $x))
        print("YES\n");
    elseif($to_measure == ($x + $y +$z))
        print("YES\n");
    else 
        print("NO\n");
}