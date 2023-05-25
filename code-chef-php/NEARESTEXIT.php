<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $seat_position = readline();

    if( $seat_position - 1 < 100 - $seat_position) {
        print("LEFT" . PHP_EOL);
    } else {
        print("RIGHT") . PHP_EOL;
    }
}