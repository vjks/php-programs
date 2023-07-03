<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $k) = explode(' ', readline());
    
    if($k == 0) {
        print(0 . PHP_EOL);
    } else {
        print(ceil($n / $k) . PHP_EOL);   
    }
}
