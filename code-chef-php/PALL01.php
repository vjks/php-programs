<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $number = readline();
    $copy = $number;
    $reverse = 0;
    
    while($number != 0){
        $last_digit = floor($number % 10);
        $reverse = $reverse * 10 + $last_digit;
        $number = floor($number / 10);
    }
    if($copy == $reverse)
        echo "wins" . PHP_EOL;
    else {
        echo "loses" . PHP_EOL;
    }
}