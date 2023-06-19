<?php

fscanf(STDIN, "%d", $tests);

for($i = 0; $i < $tests; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    $count = 0;
    if($x > $y) {
        $diff = $x - $y;
        if($diff % 2 == 0) {
            $count = $diff / 2;
        } else {
            $diff -= 1;
            $count = $diff / 2;
            $count += 2;
        }
    } elseif($y > $x) {
        $diff = $y - $x;
        $count = $diff;
    }
    
    echo $count . PHP_EOL;
}