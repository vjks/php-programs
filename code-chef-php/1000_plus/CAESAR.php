<?php

$q = readline();

for($i = 0; $i < $q; $i++) {
    $n = readline();
    $s = readline();
    $t = readline();
    $u = readline();

    $diff = ord($t[0]) - ord($s[0]);
    
    if($diff < 0) {
        $diff += 26;
    }
    
    $new_str = "";
    for($j = 0; $j < $n; $j++) {
        $new_ord = ord($u[$j]) + $diff;
        
        if($new_ord > 122) {
            $new_ord = 96 + ($new_ord - 122);
        }
        
        $new_str .= chr($new_ord);
    }
    print($new_str . PHP_EOL);
}