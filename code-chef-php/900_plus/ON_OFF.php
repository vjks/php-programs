<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $initial_states = readline();
    $final_states = readline();
    $state = "1";
    
    for($j = 0; $j < $n; $j++) {
        if($initial_states[$j] != $final_states[$j]) {
            if($state == 0)
                $state = 1;
            else
                $state = 0;
        }
    }
    print($state . PHP_EOL);
}