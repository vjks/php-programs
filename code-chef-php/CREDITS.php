<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $num_credits = readline();
    
    if($num_credits > 65) {
        print("OVERLOAD\n");
    } elseif($num_credits < 35 ) {
        print("UNDERLOAD\n");
    } else {
        echo "NORMAL\n";
    }
}