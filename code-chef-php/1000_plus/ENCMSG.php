<?php

function changeString($string, $n) {
    for($i = 0; $i < $n; $i++) {
        switch($string[$i]) {
        case 'a':
            $string[$i] = 'z';
            break;
        case 'b':
            $string[$i] = 'y';
            break;
        case 'c':
            $string[$i] = 'x';
            break;
        case 'd':
            $string[$i] = 'w';
            break;
        case 'e':
            $string[$i] = 'v';
            break;
        case 'f':
            $string[$i] = 'u';
            break;
        case 'g':
            $string[$i] = 't';
            break;
        case 'h':
            $string[$i] = 's';
            break;
        case 'i':
            $string[$i] = 'r';
            break;
        case 'j':
            $string[$i] = 'q';
            break;
        case 'k':
            $string[$i] = 'p';
            break;
        case 'l':
            $string[$i] = 'o';
            break;
        case 'm':
            $string[$i] = 'n';
            break;
        case 'n':
            $string[$i] = 'm';
            break;
        case 'o':
            $string[$i] = 'l';
            break;
        case 'p':
            $string[$i] = 'k';
            break;
        case 'q':
            $string[$i] = 'j';
            break;
        case 'r':
            $string[$i] = 'i';
            break;
        case 's':
            $string[$i] = 'h';
            break;
        case 't':
            $string[$i] = 'g';
            break;
        case 'u':
            $string[$i] = 'f';
            break;
        case 'v':
            $string[$i] = 'e';
            break;
        case 'w':
            $string[$i] = 'd';
            break;
        case 'x':
            $string[$i] = 'c';
            break;
        case 'y':
            $string[$i] = 'b';
            break;
        case 'z':
            $string[$i] = 'a';
            break;
        }        
    }
    return $string;
}

$t = readline();

for($i = 0; $i < $t; $i++) {
    $n = readline();
    $s = readline();
    
    if($n % 2 == 0)
        $end = $n;
    else {
        $end = $n - 1;
    }
    
    for($j = 0; $j < $end; $j+=2) {
        $temp = $s[$j];
        $s[$j] = $s[$j + 1];
        $s[$j + 1] = $temp;
    }
    
    $s = changeString($s, $n);
    print($s . PHP_EOL);
}