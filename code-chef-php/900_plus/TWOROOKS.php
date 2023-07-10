<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($x1, $y1, $x2, $y2) = explode(' ', readline());
    
    if($x1 == $x2 or $y1 == $y2)
        print("YES\n");
    else 
        print("NO\n");
}