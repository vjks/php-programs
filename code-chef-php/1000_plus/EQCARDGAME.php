<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $K = readline();
    
    $cards = 52;
    
    print($cards - ($K * floor($cards / $K)) . PHP_EOL);
}