<?php
$t = readline();

for($i = 0; $i < $t; $i++) {
    list($n, $u, $d) = explode(' ', readline());
    $h = explode(' ', readline());
    
    $pos = 0;
    $possible = 1;
    $para = 1;
    while($pos < $n - 1) {
        $jump = false;
        if($h[$pos] == $h[$pos + 1]) {
            //print($h[$pos] . ' cond 1 ' . $h[$pos + 1] . PHP_EOL);
            $jump = true;
        }elseif($h[$pos] > $h[$pos + 1]) {
            if($h[$pos] - $h[$pos + 1] <= $d) {
                //print($h[$pos] . ' cond 2 ' . $h[$pos + 1] . ' ' . $d . PHP_EOL);
                $jump = true;
            }    
            elseif($para == 1) {
                //print($h[$pos] . ' cond para ' . $h[$pos + 1] . ' ' . $d . PHP_EOL);
                $jump = true;
                $para--;
            }
        }elseif($h[$pos] < $h[$pos + 1]) {
            if($h[$pos + 1] - $h[$pos] <= $u) {
                //print($h[$pos] . ' cond3 ' . $h[$pos + 1] . ' ' . $h[$pos + 1] - $h[$pos] . ' ' . $u . PHP_EOL);
                $jump = true;
            }
        }
        if($jump) {
            $pos++;
            $possible++;
        }else {
            break;
        }
    }
    print($possible . PHP_EOL);
}