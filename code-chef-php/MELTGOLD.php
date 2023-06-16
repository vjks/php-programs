<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($x_melting_point, $kiln_temp) = explode(" ", readline());
    
    if($x_melting_point <= $kiln_temp)
        print(0 . PHP_EOL);
    elseif ($x_melting_point > $kiln_temp) {
        $difference = $x_melting_point - $kiln_temp;
        $j = 1;
        for(; $j < $difference; $j++) {
            $kiln_temp = $kiln_temp + $j;
            if($kiln_temp >= $x_melting_point) 
                break;
        }
        echo $j . PHP_EOL;
    }
}
