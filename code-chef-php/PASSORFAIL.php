<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_questions, $correct_answers, $desired_marks) = explode(" ", readline());
    
    $positive_marks = $correct_answers * 3;
    $negative_marks = ($num_questions - $correct_answers);
    
    if($desired_marks <= ($positive_marks - $negative_marks)) {
        print("PASS\n"); 
    }
    else {
        print("FAIL\n");
    }
}