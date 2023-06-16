<?php
$tests = readline();

for($i = 0 ; $i < $tests; $i++) {
    list($minutes_left, $episodes, $duration) = explode(" ", readline());
    
    if($episodes * $duration < $minutes_left) {
        print("YES" . PHP_EOL);
    } else {
        print("NO" . PHP_EOL);
    }
}