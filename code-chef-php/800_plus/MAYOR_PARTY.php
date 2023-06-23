<?php

$t = readline();

$i = 0; 
do {
    list($pa, $pb, $pc) = explode(" ", readline());
    
    if($pb > ($pa + $pc)) {
        print("$pb\n");
    } else {
        print($pa + $pc . PHP_EOL);
    }
    $i++;
} while($i < $t);