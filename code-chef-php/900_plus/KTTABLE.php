<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $allotted_time = explode(' ', readline());
    $required_time = explode(' ', readline());
    $count = 0;
    $starting_time = 0;
    for($j = 0; $j < $n; $j++) {
        if($allotted_time[$j] - $starting_time >= $required_time[$j]) {
            $count++;
        }
        $starting_time = $allotted_time[$j];
    }
    print($count. PHP_EOL);
}
