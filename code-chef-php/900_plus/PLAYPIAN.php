<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $array = readline();
    $len = strlen($array);
    $valid_string = "yes";
    for($j = 0; $j < $len; $j+=2) {
        if($array[$j] == $array[$j+1]) {
            $valid_string = "no";
            break;
        }    
    }
    print($valid_string . PHP_EOL);
}
