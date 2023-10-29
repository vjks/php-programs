<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    
    $pos = iconv_strpos($s, "0");
    
    if($pos == false) {
        print($n . PHP_EOL);
    } else {
        print($pos . PHP_EOL);
    }
}