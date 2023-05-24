<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $c) = explode(" ", readline());
    $difference = ($c - $a) / 2;
    if(is_int($difference)) {
        print($a + $difference . PHP_EOL);
    } else { 
        print("-1" . PHP_EOL);
    }
}