<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $num_problems = readline();
    $contests_codes = explode(" ", readline());
    $start38 = $ltime108 = 0;
    
    for($j = 0; $j < $num_problems; $j++) {
        if($contests_codes[$j] == "START38")
            $start38 += 1;
        else {
            $ltime108 += 1;
        }
    }
    echo $start38 . " " . $ltime108 . PHP_EOL;
}