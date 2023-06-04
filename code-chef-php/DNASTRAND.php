<?php

$tests = readline();

for($i = 0; $i < $tests; $i++) {
    $string_length = readline();
    $dna_string = readline();
    $comp_string = "";
    for($x = 0; $x < $string_length; $x++) {
        if($dna_string[$x] == "A")
            $comp_string = $comp_string . "T";
        elseif($dna_string[$x] == "T")
            $comp_string = $comp_string . "A";
        elseif($dna_string[$x] == "C")
            $comp_string = $comp_string . "G";
        elseif($dna_string[$x] == "G")
            $comp_string = $comp_string . "C";
        else
            $comp_string = $comp_string . "ERROR";
    }
    print("$comp_string\n");
}