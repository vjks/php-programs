<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $b) = explode(' ', readline());
    
    $decision = "no tablet";
    $max_area = 0;
    for($j = 0; $j < $n; $j++) {
        list($w, $h, $p) = explode(' ', readline());
        $area = $w * $h;
        
        if($p <= $b and $max_area < $area) {
            $max_area = $area;
            $decision = $max_area;
        }
    }
    print($decision . PHP_EOL);
}
