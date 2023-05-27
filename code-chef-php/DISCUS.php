<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($distance1, $distance2, $distance3) = explode(" ", readline());
    $longest_distance = $distance1;
    if($distance1 < $distance2)
        $longest_distance = $distance2;
    elseif ($distance2 < $distance3)
        $longest_distance = $distance3;
    elseif($distance3 < $distance1)
        $longest_distance = $distance1;
    print($longest_distance . PHP_EOL);
}