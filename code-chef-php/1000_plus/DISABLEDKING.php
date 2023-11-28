<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    if($n % 2 == 0) {
        print($n . PHP_EOL);
    } else {
        print($n - 1 . PHP_EOL);
    }
}
