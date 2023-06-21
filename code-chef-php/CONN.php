<?php

$tests = readline();

$i = 0;
do {
    $number = readline();
    
    if($number % 2 == 0)
        print("YES\n");
    elseif($number >= 7 and $number % 2 != 0)
        print("YES\n");
    else
        print("NO\n");
    $i ++;   
}while($i < $tests);