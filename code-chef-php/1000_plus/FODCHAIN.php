<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($e, $k) = explode(' ', readline());

    $count = 0;
    while($e >= 1) {
        $e = floor($e/$k);
        $count++;
    }
    
    print($count . PHP_EOL);   
}