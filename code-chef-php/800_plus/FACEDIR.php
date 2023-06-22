<?php

$t = readline();

$i = 0;
do {
    $seconds = readline();
    if($seconds % 2 == 0 and $seconds % 4 != 0) {
        print('South' . PHP_EOL);
    } elseif($seconds % 4 == 0) {
        print('North' . PHP_EOL);
    } elseif(($seconds - 1) % 4 == 0) {
        print('East' . PHP_EOL);
    } elseif(($seconds + 1) % 4 == 0) {
        print('West' . PHP_EOL);
    }
    $i++;
} while($i < $t);
