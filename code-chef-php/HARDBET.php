<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b, $c) = explode(" ", readline());
    
    $hardest = min($a, $b);
    $hardest = min($hardest, $c);
    
    if($hardest == $a) {
        echo "Draw" . PHP_EOL;
        
    } elseif($hardest == $b) {
        echo "Bob" . PHP_EOL;
    } else {
        echo "Alice" . PHP_EOL;
    }
}