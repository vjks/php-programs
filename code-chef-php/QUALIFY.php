<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($to_score, $easy_problems, $hard_problems) = explode(" ", readline());
    if($easy_problems + $hard_problems * 2 >= $to_score) 
        print("Qualify\n");
    else
        print("NotQualify\n");
}