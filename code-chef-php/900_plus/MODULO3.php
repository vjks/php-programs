<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b) = explode(' ', readline());
    if($a % 3 == 0 or $b % 3 == 0) {
        print(0 . PHP_EOL);
    } elseif(abs($a - $b) % 3 == 0) {
        print(1 . PHP_EOL);
    } else {
        print(2 . PHP_EOL);
    }
}
