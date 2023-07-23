<?php

$t = readline();

for($i = 0; $i < $t; $i++) { 
    $n = readline();
    
    $count = 0;
    while($n != 0) {
        $x = $n % 10;
        //print($x . PHP_EOL);
        $n = floor($n / 10);
        if($x == 4)
            $count++;
    }
    print($count . PHP_EOL);
}
