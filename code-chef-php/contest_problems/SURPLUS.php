<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a1, $a2, $b1, $b2) = explode(' ', readline());
    
    $imports = $a1 + $b1;
    $exports = $a2 + $b2;
    
    if($imports < $exports) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}
