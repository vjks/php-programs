<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($a1, $a2, $a3) = explode(' ', readline());
    list($b1, $b2, $b3) = explode(' ', readline());
    $correct_answer = 0;
    $heros_correct_answer = 0;
    
    if($a1 == 1) 
        $correct_answer++;
    if($a2 == 1)
        $correct_answer++;
    if($a3 == 1) 
        $correct_answer++;
        
    if($b1 == 1)
        $heros_correct_answer++;
    if($b2 == 1)
        $heros_correct_answer++;
    if($b3 == 1) 
        $heros_correct_answer++;
        
    if($correct_answer == $heros_correct_answer)
        print("Pass\n");
    else {
        print("Fail\n");
    }
    
}
