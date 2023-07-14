<?php

$t = readline();
for($i = 0; $i < $t; $i++) {
    $n = readline();
    $count = 0;
    for($j = 0; $j < $n; $j++) {
        list($sub_time, $judge_time) = explode(' ', readline());
        if($judge_time - $sub_time > 5) 
            $count++;
    }
    print($count . PHP_EOL);
}