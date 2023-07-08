<?php

list($n, $r) = explode(' ', readline());

for($i = 0; $i < $n; $i++) {
    $player_rating = readline();
    
    if($player_rating >= $r) {
        print("Good boi\n");
    } else{
        print("Bad boi\n");
    }
}
