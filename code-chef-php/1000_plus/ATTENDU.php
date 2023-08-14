<?php

$t = readline();

$pass_criteria = 120 * .75;

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $attendence_string = readline();
    
    $counter = 0;
    for($j = 0; $j < $n; $j++) {
        if($attendence_string[$j] == '1') {
            $counter++;
        }
    }
    
    // This is the number of days for which Chef can still attend classes.
    $possible_attendence = 120 - $n; 
    // Number of days Chef has already attended + Number of days he can attend
    // needs to be greater than or equal to the semester pass criteria.
    if($counter + $possible_attendence >= $pass_criteria) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}