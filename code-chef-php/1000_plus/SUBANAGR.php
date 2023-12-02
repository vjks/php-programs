<?php

$n = readline();

$a = array();
for($i = 0; $i < $n; $i++) {
    $s = readline();
    array_push($a, $s);
    
}

$answer = array();

for($j = 0; $j < strlen($a[0]); $j++) {
    if(array_key_exists($a[0][$j], $answer)) {
        $answer[$a[0][$j]] += 1;
    } else {
        $answer[$a[0][$j]] = 1;
    }
}

for($k = 0; $k < strlen($a[0]); $k++) {
    $l = 1;
    while($l < $n) {
        $count = substr_count($a[$l], $a[0][$k]);
        if($count <  $answer[$a[0][$k]]) {
            $answer[$a[0][$k]] = $count;
        }    
        $l++;
    }
}

$output = '';
foreach ($answer as $key => $value) {
    $output .= str_repeat($key, $value);
}

$output = str_split($output);
sort($output);
$output = implode($output);

if($output == '') {
    print('no such string');
} else {
    print($output);
}