<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($sx, $sy, $ex, $ey) = explode(" ", readline());
    if($sx != $ex and $sy != $ey)
        print("1\n");
    else
        print("2\n");
}