<?php

$number = readline();

if($number % 4 == 0)
    $number+=1;
else {
    $number-=1;
}

print($number);