<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $s1 = readline();
    $s2 = readline();
    
    $q_count_s1 = substr_count($s1, '?');
    $q_count_s2 = substr_count($s2, '?');
    $n = strlen($s1);
    $max = $min = 0;
    for($j = 0; $j < $n; $j++) {
        if($s1[$j] != $s2[$j] and $s1[$j] != '?' and $s2[$j] != '?') {
            $min++;
        } 
        
        if ($s1[$j] == '?' or $s2[$j] == '?' or $s1[$j] != $s2[$j]) {
            $max++;
        }
    }
    print($min . ' '. $max . PHP_EOL);
}
