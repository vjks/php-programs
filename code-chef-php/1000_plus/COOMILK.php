<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = explode(' ', readline());
    
    $followed_instructions = true;
    
    if($n == 1 and strcmp($s[0], "cookie") === 0) {
        $followed_instructions = false;
    }
    
    for($j = 0; $j < $n - 1; $j++) {
        if(strcmp($s[$n - 1], "cookie") === 0) {
            $followed_instructions = false;
            break;
        }
        
        if(strcmp($s[$j], "cookie") === 0) {
            if(strcmp($s[$j + 1], "milk") === 0) {
                $j++;
            } else {
                $followed_instructions = false;
                break;
            }
        }
    }
    
    if($followed_instructions) {
        print('YES' . PHP_EOL);
    } else {
        print('NO' . PHP_EOL);
    }
}