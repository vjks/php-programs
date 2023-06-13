<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_teams, $round_length, $break_duration) = explode(" ", readline());
    $num_matches = log($num_teams) / log(2);
     echo $round_length * $num_matches + ($num_matches - 1) * $break_duration . PHP_EOL;
}