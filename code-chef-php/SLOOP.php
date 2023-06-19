<?php

fscanf(STDIN, "%d", $tests);

for($i = 0; $i < $tests; $i++) {
    fscanf(STDIN, "%d %d", $m, $s);
    
    echo floor($m / $s) . "\n";
}