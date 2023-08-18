<?php

$t = readline();

for($i = 0; $i < $t; $i++) {
    $N = readline();
    $gestures = readline();
    
    $person = "ERROR";
    for($j = 0; $j < $N; $j++) {
        if($gestures[$j] == 'I') {
            $person = "INDIAN\n";
            break;
        } elseif($gestures[$j] == 'Y') {
            $person = "NOT INDIAN\n";
        } 
    }
    
    if($person != "NOT INDIAN\n" and $person != "INDIAN\n") {
        $person = "NOT SURE\n";
    }
    print($person);
}
