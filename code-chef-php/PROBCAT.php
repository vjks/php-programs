<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $x = readline();
    $category = "none";
    if($x >= 1 and $x < 100) {
        $category = "Easy";
    } elseif($x >= 100 and $x < 200) {
        $category = "Medium";
    } elseif($x >= 200 and $x <= 300) {
        $category = "Hard";
    }
    
    echo $category . PHP_EOL;
}