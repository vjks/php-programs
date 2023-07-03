<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $leave = 0;
    if($n % 7 == 0 or ($n + 1) % 7 == 0) {
        $leave = floor(($n + 1) / 7);
    } else {
        $leave = floor($n / 7);
    }
    print("$leave\n");
}