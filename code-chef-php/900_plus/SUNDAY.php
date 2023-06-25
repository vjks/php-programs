<?php

$t = readline();

$i = 0;
do {
    $num_fests = readline();
    $day_fests = explode(" ", readline());
    
    $count = 8; //There are 8 Saturdays and Sundays
    $j = 0; 
    do {    //  If the day is not divisible by zero and day + 1 is
            //  not divisible by 7 then increment the number of holidays.
        if($day_fests[$j] % 7 != 0 and ($day_fests[$j] + 1) % 7 != 0) {
            $count++;
        }
        $j++;
    } while($j < $num_fests);
    print($count . PHP_EOL);
    $i++;
} while($i < $t);