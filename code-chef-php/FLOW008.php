<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $number = readline();
    
    if ($number < 10) 
        echo("Thanks for helping Chef!\n");
    else {
        echo("-1\n");
    }
}
