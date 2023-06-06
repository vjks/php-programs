<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($x1, $y1, $x2, $y2) = explode(" ", readline());
    
    $x1_minus_x2 = abs($x1 - $x2);
    $y1_minus_y2 = abs($y1 - $y2);
    print(max($x1_minus_x2, $y1_minus_y2) . PHP_EOL);
}
