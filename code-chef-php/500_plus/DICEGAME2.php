<?php

$t = readline();


for($i = 0; $i < $t; $i++) {
    
    $scores = explode(' ', readline());
    $alice_scores = array();
    $bob_scores = array();
    
    array_push($alice_scores, $scores[0]);
    array_push($alice_scores, $scores[1]);
    array_push($alice_scores, $scores[2]);
    array_push($bob_scores, $scores[3]);
    array_push($bob_scores, $scores[4]);
    array_push($bob_scores, $scores[5]);
    
    sort($alice_scores);
    sort($bob_scores);
    
    $alice_total = $alice_scores[1] + $alice_scores[2];
    $bob_total = $bob_scores[1] + $bob_scores[2];
    
    if($alice_total > $bob_total) {
        print("Alice\n");
    } elseif($bob_total > $alice_total) {
        print("Bob\n");
    } else {
        print("Tie\n");
    }
}
