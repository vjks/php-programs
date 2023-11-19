<?php

$t = readline();
for($i = 0; $i < $t; $i++) {
    $tr = readline();
    $tr_array = explode(' ', readline());
    $dr = readline();
    $dr_array = explode(' ', readline());
    $ts = readline();
    $ts_array = explode(' ', readline());
    $ds = readline();
    $ds_array = explode(' ', readline());
    
    $cond1 = true;
    $cond2 = true;
    for($j = 0; $j < $ts; $j++) {
        if(array_search($ts_array[$j], $tr_array) === false) {
            $cond1 = false;
        }
    }
    
    for($j = 0; $j < $ds; $j++) {
        $pos = array_search($ds_array[$j], $dr_array);
        if($pos === false) {
            $cond2 = false;
        }
    }
    
    if($cond1 and $cond2) {
        print('yes' . PHP_EOL);
    } else {
        print('no' . PHP_EOL);
    }
}