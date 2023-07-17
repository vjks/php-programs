<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $array_n = explode(' ', readline());
    $v = readline();
    $error = array();
    for($j = 0; $j < $n; $j++) {
        if($v[$j] == 0) {
            array_push($error, $array_n[$j]);
        }
    }
    if(count($error) > 0) 
        print(min($error) . PHP_EOL);
}