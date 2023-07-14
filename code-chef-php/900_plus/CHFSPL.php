<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $array = explode(' ', readline());
    sort($array);
    
    print( $array[1] + $array[2] . PHP_EOL);
}
