<?php

$t = readline();
$i = 0;
do{
    list($h, $x, $y, $c) = explode(" ", readline());
    $water_left = $c - ((($h * $x) + (floor($y / 2) * $h)));
    
    if($water_left >= 0) {
        print("YES\n");
    } else {
        print("NO\n");
    }
    
    $i++;
}while($i < $t);
