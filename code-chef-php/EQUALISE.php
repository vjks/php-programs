<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($a, $b) = explode(" ", readline());
    
    if($a == $b) {
        echo "yes\n";
    } elseif($a > $b) {
        while($b < $a) {
            $b *= 2;
            //echo $b . PHP_EOL;
        } 
        if($a == $b) {
            print("yes\n");
        } else {
            echo "no\n";
        }
    } elseif ($b > $a) {
        while($a < $b) {
            $a *= 2;
        }
        
        if($a == $b) {
            print("yes\n");
        } else {
            echo "no\n";
        }
    } else {
        echo "no\n";
    }
}
