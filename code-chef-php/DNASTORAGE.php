<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $length = readline();
    $binary_string = readline();
    $sequence = "";
    for($j = 0; $j < $length; $j+=2) {
        $chars = $binary_string[$j] . $binary_string[$j + 1];
        if(strcmp($chars, "00") == 0) {
            $sequence .= "A";
        } elseif(strcmp($chars, "01") == 0) {
            $sequence .= "T";
        } elseif(strcmp($chars, "10") == 0) {
            $sequence .= "C";
        } elseif(strcmp($chars, "11") == 0) {
            $sequence .= "G";
        }
    }
    echo $sequence . PHP_EOL;
}