<?php
$t = readline();

for($i = 0; $i < $t; $i++) {
    $a = explode(' ', readline());
    
    $count = 0;
    $sum = array_sum($a) - $a[0];
    
    if($sum <= $a[0]) {
        $count = 1;
    }elseif($a[0] < $a[1] + $a[2] and $a[0] < $a[2] + $a[3]) {
        $count = 3;
    }else {
        $count = 2;
    }
    
    print($count . PHP_EOL);
}