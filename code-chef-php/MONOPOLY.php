<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($revenue_1, $revenue_2, $revenue_3) = explode(" ", readline());
    $monopoly = "NO\n";
    if($revenue_1 > ($revenue_2 + $revenue_3)) {
        $monopoly = "YES\n";
    }
    if($revenue_2 > ($revenue_3 + $revenue_1)) {
        $monopoly = "YES\n";
    }
    if($revenue_3 > ($revenue_1 + $revenue_2)) {
        $monopoly = "YES\n";
    }
    print($monopoly); 
}