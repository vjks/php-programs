<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $x = readline();
    if($x % 10 == 0) {
        print(0 . PHP_EOL);
    } elseif ($x % 5 == 0) {
        print(1 . PHP_EOL);
    } else {
        print(-1 . PHP_EOL);
    }
    
}
