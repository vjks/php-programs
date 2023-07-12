<?php

list($a, $b, $x, $y) = explode(' ', readline());

$messi_points = $a * 2 + $b;
$ronaldo_points = $x * 2 + $y;

if($messi_points > $ronaldo_points) {
    print("MESSI\n");
} elseif ($ronaldo_points > $messi_points) {
    print("RONALDO\n");
} else {
    print("EQUAL\n");
}
