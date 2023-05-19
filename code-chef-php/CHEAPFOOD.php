<?php

$T = readline();
for($i = 0; $i < $T; $i++) {
    $amount = readline();
    if($amount * .10 > 100) {
        print($amount * .10 . PHP_EOL);
    } else {
        print("100\n");
    }
}
