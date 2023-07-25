<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $vars = explode(' ', readline());
    
    $lang = 0;
    if(min($vars[0], $vars[1]) == min($vars[2], $vars[3]) and max($vars[0], $vars[1]) == max($vars[2], $vars[3])) {
            $lang = 1;   
    } elseif(min($vars[0], $vars[1]) == min($vars[4], $vars[5]) and max($vars[0], $vars[1]) == max($vars[4], $vars[5])) {
        $lang = 2;
    }
    
    print($lang . PHP_EOL);
}