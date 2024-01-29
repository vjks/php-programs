<?php

$t = readline();

$input = explode(' ', $t);

$a = array();
$to_translate = strtolower($input[1]);
for($i = 0; $i < strlen($to_translate); $i++) {
    array_push($a, $a[chr(97 + $i)] = $to_translate[$i]);
}

for($i = 0; $i < strlen($to_translate); $i++) {
    array_push($a, $a[chr(65 + $i)] = strtoupper($to_translate[$i]));
}

array_push($a, $a['?'] = '?');
array_push($a, $a['_'] = ' ');
array_push($a, $a['.'] = '.');
array_push($a, $a[','] = ',');
array_push($a, $a['!'] = '!');

for($j = 0; $j < $input[0]; $j++) {
    $string = readline();
    
    //print($string. PHP_EOL);
    $output = '';
    for($k = 0; $k < strlen($string); $k++) {
        if(array_key_exists($string[$k], $a)) {
            $output .= $a[$string[$k]];
        }
    }
    print($output . PHP_EOL);
}