<?php

$t = readline();

$i = 0; 
do {
    list($x, $y, $z) = explode(" ", readline());
    $cost = $x * $y;
    $selling_price = $x * $z;
    print($selling_price - $cost . PHP_EOL);
    $i++;
} while($i < $t);
