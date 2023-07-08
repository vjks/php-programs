<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $d = readline();
    $string = readline();
    
    $rearrange = false;
    for($j = 0; $j < $d; $j++) {
        if($string[$j] == 0 or $string[$j] == 5) {
            $rearrange = true;
            break;
        } 
    }
    
    if($rearrange) 
        print("YES\n");
    else
        print("NO\n");
}
