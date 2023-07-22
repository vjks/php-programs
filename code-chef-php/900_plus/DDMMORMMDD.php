<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $s = readline();
    
    $dd_or_mm = $s[0] . $s[1];
    $mm_or_dd = $s[3] . $s[4];
    
    if($dd_or_mm > 12 and $mm_or_dd <= 12) {
        print("DD/MM/YYYY\n");
    } elseif($mm_or_dd > 12 and $dd_or_mm <= 12) {
        print("MM/DD/YYYY\n");
    } elseif($dd_or_mm <= 12 and $mm_or_dd <= 12) {
        print("BOTH\n");
    }
}