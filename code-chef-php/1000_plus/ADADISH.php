<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $c = explode(' ', readline());
    
    $output = '';
    if($n == 1) {
        $output = $c[0];
    } elseif($n == 2) {
        $output = max($c);
    } elseif($n == 3) {
        $sum = array_sum($c);
        $max = max($c);
        $output = max($max, $sum - $max);
    } elseif($n == 4) {
        $max = max($c);
        $min = min($c);
        $sum = array_sum($c);
        
        if($max == $sum - $max) {
            $output = $max;
        } elseif($max > $sum - $max) {
            $output = $max;
        } else {
            $other = $sum - ($max + $min);
            $output1 = max($other, $max + $min);    
            $output2 = $sum - $max;
            $output = min($output1, $output2);
        }
    }
    print($output . PHP_EOL);
}