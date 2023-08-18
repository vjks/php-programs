<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($x, $y, $z) = explode(' ', readline());
    
    if($x >= $y) {
        print("PIZZA\n");
    } elseif($x >= $z) {
        print("BURGER\n");
    } else {
        print("NOTHING\n");
    }
}