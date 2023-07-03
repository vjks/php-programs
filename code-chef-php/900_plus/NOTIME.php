<?php

list($n, $h, $x) = explode(" ", readline());
$time_zones = explode(" ", readline());
$can_solve = "NO\n";
for($j = 0; $j < $n; $j++) {
    if($time_zones[$j] + $x >= $h) {
        $can_solve = "YES\n";
        break;
    }
}
print($can_solve . PHP_EOL);

