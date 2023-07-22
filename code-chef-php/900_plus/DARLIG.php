<?php

$t = readline();

for($i = 0; $i < $t; $i++) { 
    list($n, $k) = explode(' ', readline());
    $state = "Ambiguous\n";
    if($k == 0) {
        if($n % 4 == 0)
            $state = "Off\n";
        else
            $state = "On\n";
    }
    if($k == 1) {
        if($n % 4 == 0)
            $state = "On\n";
        else
            $state = "Ambiguous\n";
    }
    print($state);
}