<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b, $c, $d, $e) = explode(' ', readline());
    
    $sum3 = $a + $b + $c;   // Sum of the three numbers will be used to calculate the 2nd highest number.
    $min = min($a, $b, $c);
    $max = max($a, $b, $c);
    
    // Find out the biggest bag that can be the carry-on bag.
    $carry = 0;
    if($max <= $e) {
        $carry = $max;
    } elseif($sum3 - ($max + $min) <= $e) {
        $carry = $sum3 - ($max + $min);
    } else {
        $carry = $min;
    }
    
    // Calculate the sum of the two checked in bags.
    $checkedin = $sum3 - $carry;
    
    // Find out if the criteria for checked in and carry-on are met.
    if($checkedin <= $d and $carry <= $e) {
        print("YES\n");
    } else {
        print("NO\n");
    }
}
