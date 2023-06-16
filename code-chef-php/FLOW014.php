<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($hardness, $carbon, $tensile) = explode(" ", readline());
    
    
    $grade = 0;
    if($hardness > 50 and $carbon < 0.7 and $tensile > 5600) {
        $grade = 10;  
    } elseif ($hardness > 50 and $carbon < 0.7 and $tensile <= 5600) {
        $grade = 9;
    } elseif ($hardness <= 50 and $carbon < 0.7 and $tensile > 5600) {
        $grade = 8;
    } elseif ($hardness > 50 and $carbon >= 0.7 and $tensile > 5600) {
        $grade = 7;
    } elseif ($hardness > 50 or $carbon < 0.7 or $tensile > 5600) {
        $grade = 6;
    } elseif ($hardness <= 50 and $carbon >= 0.7 and $tensile <= 5600) {
        $grade = 5;
    }
    echo $grade . PHP_EOL;
}