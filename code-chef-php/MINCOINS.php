<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $rupees = readline();
    $count = 0;
    if($rupees % 10 == 0) { // The number can be expressed as a multiple of 10
        print($rupees / 10 . PHP_EOL);
    } elseif ($rupees % 10 != 0 and $rupees % 5 == 0) { // number is a multiple of 5 but not of 10
        print(floor($rupees / 10) + 1 . PHP_EOL);
    } else {
        print ("-1" . PHP_EOL);
    }
}