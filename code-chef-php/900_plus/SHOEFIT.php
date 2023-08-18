<?php

$t = readline();

$i = 0;
$output = '';

do {
    list($a, $b, $c) = explode(' ', readline());
    $left = $right = 0;
    
    if($a == 0 or $b == 0 or $c == 0) {
        $left++;
    }
    
    if ($a == 1 or $b == 1 or $c == 1) {
        $right++;
    }
    
    if($left > 0 and $right > 0) {
        $output = $output . 1 . PHP_EOL;
    } else {
        $output = $output . 0 . PHP_EOL;
    }
    $i++;
} while($i < $t);

print($output);