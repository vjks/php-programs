<?php

$t = readline();

$i = 0; 
do {
    $goals = explode(" ", readline());
    $j = 1;
    $team1 = 0;
    $team2 = 0;
    do {
        if($j % 2 == 0) {
            if($goals[$j - 1] == 1)
                $team2++;
        } else {
            if($goals[$j - 1] == 1)
                $team1++;
        }
        $j++;
    } while($j <= 10);
    
    if($team1 == $team2) {
        print(0 . PHP_EOL);
    } elseif($team1 > $team2) {
        print(1 . PHP_EOL);
    } else {
        print(2 . PHP_EOL);
    }
    $i++;
} while($i < $t);
