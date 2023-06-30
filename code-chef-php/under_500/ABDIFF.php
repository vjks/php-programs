<?php

list($a, $b) = explode(' ', readline());

$sum = $a + $b;
$product = $a * $b;
$diff = abs($product - $sum);
print("$diff\n");