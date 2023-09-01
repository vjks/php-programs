<?php

$s = readline();
$n = readline();

for($i = 0; $i < $n; $i++) {
    $w = readline();
    
    $j = 0; 
    $equal = true;
    $word_len = strlen($w);
    while($j < $word_len) {
        if(substr_count($s, $w[$j]) == 0) {
            $equal = false;
            break;
        }
        $j++;
    }
    if($equal) {
        print("Yes\n");
    } else {
        print("No\n");
    }
}