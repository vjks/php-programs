<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($num_episodes, $even_length, $odd_length) = explode(" ", readline());
    $sum = 0;
    $even_episdoes = 0;
    $odd_episodes = 0;
    
    if($num_episodes % 2 == 0)
        $even_episodes = $odd_episodes = $num_episodes / 2;
    else {
        $even_episodes = floor($num_episodes / 2);
        $odd_episodes = ceil($num_episodes / 2);
    }
    
    $sum = $even_episodes * $even_length + $odd_episodes * $odd_length;
    print($sum . PHP_EOL);
}