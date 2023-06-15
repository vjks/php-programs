<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($bananas, $apples) = explode(" ", readline());
    
    $possible_chaat = floor($bananas / 2);
    
    if($possible_chaat < $apples) {
        print($possible_chaat . PHP_EOL);
    } elseif($possible_chaat > $apples) {
        print($apples . PHP_EOL);
    } elseif($possible_chaat == $apples) {
        print($possible_chaat . PHP_EOL);
    }
}
