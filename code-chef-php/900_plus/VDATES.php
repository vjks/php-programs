<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($d, $l, $r) = explode(' ', readline());
    
    if($d >= $l and $d <= $r) {
        print("Take second dose now\n");
    } elseif($d < $l) {
        print("Too Early\n");
    } elseif($d > $r) {
        print("Too Late\n");
    }
}
