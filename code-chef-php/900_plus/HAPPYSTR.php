<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $s = readline();
    $len = strlen($s);
    $happy = "Sad";
    $pattern = "/a|e|i|o|u/i";
    for($j = 0; $j < $len - 2; $j++) {
        if(preg_match($pattern, $s[$j]))
            if(preg_match($pattern, $s[$j + 1]))
                if(preg_match($pattern, $s[$j + 2])) {
                    $happy = "Happy";
                    break;
                }
    }
    print($happy . PHP_EOL);
}