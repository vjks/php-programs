<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $first_player = explode(' ', readline());
    $second_player = explode(' ', readline());
    
    $count_first = $count_second = 0;
    for($j = 0; $j < 3; $j++) {
        if($first_player[$j] > $second_player[$j]) {
                $count_first++;
        } elseif($second_player[$j] > $first_player[$j]) {
                $count_second++;
        }
    }
    if($count_first > $count_second) {
        print("A\n");
    } elseif($count_second > $count_first) {
        print("B\n");
    } else {
        print("Equal\n");
    }
}