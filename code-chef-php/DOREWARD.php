<?php

$t = readline();

$i = 0; 
do {
    $x = readline();
    
    if($x <= 3) {
        print("BRONZE\n");
    } elseif($x > 3 and $x <= 6) {
        print("SILVER\n");
    } elseif($x > 6) {
        print("GOLD\n");
    }
    $i++;
} while($i < $t);
