<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $chef_snaps = explode(' ', readline());
    $chefina_snaps = explode(' ', readline());
    
    $j = $count = $biggest_count = 0; 
    while($j < $n) {
        if($chef_snaps[$j] > 0 and $chefina_snaps[$j] > 0) { 
            $count++;
            if($count >= $biggest_count) {
                $biggest_count = $count;
            }
        } else {
            $count = 0;
        } 
        $j++;
    }
    print($biggest_count . PHP_EOL);
}
