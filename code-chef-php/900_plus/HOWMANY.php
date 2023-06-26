<?php

$num = readline();
$len = strlen($num);
$count = 0;

do {
    $num /= 10;
    $len--;
    $count++;
} while($len > 0);

if($count > 3) {
    print("More than 3 digits\n");
} else {
    print($count . PHP_EOL);
}
