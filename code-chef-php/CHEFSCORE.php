<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_problems, $max_score, $score_needed) = explode(" ", readline());
    $var = false;
    for($j = 1; $j <= $num_problems; $j++) {
        if($j * $max_score == $score_needed or $score_needed == 0) {
            print("YES\n");
            $var = true;
            break;
        }
    }
    if(!$var)
        print("NO\n");
}