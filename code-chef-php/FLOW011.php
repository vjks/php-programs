<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $salary = readline();
    $gross = 0;
    if($salary < 1500) {
        $gross = $salary + (.10 * $salary) + (.90 * $salary); 
    } else {
        $gross = $salary + 500 + (.98 * $salary);
    }
    echo $gross . PHP_EOL;
}