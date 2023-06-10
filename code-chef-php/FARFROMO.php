<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($x1, $y1, $x2, $y2) = explode(" ", readline());
    $alex_distance = sqrt($x1 * $x1 + $y1 * $y1);
    $bob_distance = sqrt($x2 * $x2 + $y2 * $y2);
    if($alex_distance < $bob_distance)
        print("BOB\n");
    elseif($alex_distance > $bob_distance)
        print("ALEX\n");
    else
        print("EQUAL\n");
}
