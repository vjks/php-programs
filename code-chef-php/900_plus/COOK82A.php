<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    list($team1_name, $team1_score) = explode(' ', readline());
    list($team2_name, $team2_score) = explode(' ', readline());
    list($team3_name, $team3_score) = explode(' ', readline());
    list($team4_name, $team4_score) = explode(' ', readline());
    
    $array[$team1_name] = (int)$team1_score; 
    $array[$team2_name] = (int)$team2_score; 
    $array[$team3_name] = (int)$team3_score; 
    $array[$team4_name] = (int)$team4_score; 
    
    if($array['Malaga'] > $array['RealMadrid'] and $array['Barcelona'] > $array['Eibar']) {
        print("Barcelona\n");
    } else { 
        print("RealMadrid\n");
    }
}
