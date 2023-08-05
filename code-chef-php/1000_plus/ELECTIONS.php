<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($xa, $xb, $xc) = explode(' ', readline());
    
    if($xa > 50) {
        print("A\n");
    } else if($xb > 50) {
        print("B\n");
    } else if($xc > 50) {
        print("C\n");
    } else {
        print("NOTA\n");
    }
}
