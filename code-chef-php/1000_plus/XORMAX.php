<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $a = readline();
    $b = readline();
    
    $ones_a = substr_count($a, '1');
    $ones_b = substr_count($b, '1');
    
    $zeroes_a = substr_count($a, '0');
    $zeroes_b = substr_count($b, '0');
    
    $ones_max = $ones_a + $ones_b;
    $zeroes_total = $zeroes_a + $zeroes_b;
    
    $ones_total = min($ones_max, $zeroes_total);
    
    $output = '';
    
    for($j = 0; $j < $ones_total; $j++) {
        $output .= '1';
    }
    for($k = 0; $k < strlen($a) - $ones_total; $k++) {
        $output .= '0';
    }
    print($output . PHP_EOL);
}
