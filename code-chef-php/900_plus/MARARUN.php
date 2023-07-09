<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($D, $d, $a, $b, $c) = explode(' ', readline());
    $prize = 0;
    $distance_covered = $D * $d;
    if($distance_covered >= 10)
        $prize = $a;
    if($distance_covered >= 21)
        $prize = $b;
    if($distance_covered >= 42)
        $prize = $c;
    print($prize . PHP_EOL);
}
