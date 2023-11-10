<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($x, $y, $z) = explode(' ', readline());

    $needed_time = $x * $y;
    $left_time = $z * 24 * 60;   

    if($needed_time <= $left_time) {
        print('YES' . PHP_EOL);
    } else {
        print('NO' . PHP_EOL);
    }
}