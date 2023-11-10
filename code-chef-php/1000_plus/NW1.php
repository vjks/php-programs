<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($w, $s) = explode(' ', readline());
    
    $days = array("mon" => 1, "tues" => 2, "wed" => 3, "thurs" => 4, "fri" => 5, "sat" => 6, "sun" => 7);
    $count = array(0, 0, 0, 0, 0, 0, 0);
    
    $pos = 0;
    if(array_key_exists($s, $days)) {
        $pos = $days[$s] - 1;
    }
    
    for($j = 0; $j < $w; $j++) {
        
        if($pos == 7) {
            $pos = 0;
        }
        $count[$pos] += 1;
        $pos++;
    }
    
    $output = '';
    for($k = 0; $k < 7; $k++) {
        $output .= $count[$k] . ' ';
    }
    
    print(trim($output) . PHP_EOL);
}