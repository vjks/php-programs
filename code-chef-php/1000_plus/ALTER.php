<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a, $b, $p, $q) = explode(' ', readline());
    $possible = "YES";
    
    if($p % $a != 0 or $q % $b != 0) {
        $possible = "NO";
    }
    
    $diff = abs(($q / $b) - ($p / $a));
    if(!($diff >= 0 and $diff < 2)) {
        $possible = "NO";
    }
    
    print($possible . PHP_EOL);
}
