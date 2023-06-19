<?php


//fscanf(STDIN, "%d", $n);
$n = readline();

while($n != 0) {
    //print($n . PHP_EOL);
    $permutation = explode(" ", readline());
    
    $inverse = array();
    for($k = 1; $k <= $n; $k++) {
        $index = $permutation[$k - 1] - 1;
        $inverse[$index] = $k;  
    }
    
    $ambiguous = TRUE;
    for($j = 0; $j < $n; $j++) {
        if($inverse[$j] != $permutation[$j]) {
            $ambiguous = FALSE;
        }
    }
    
    if($ambiguous) {
        echo "ambiguous" . PHP_EOL;
    } else {
        echo "not ambiguous" . PHP_EOL;
    }
    $n = readline();
}
