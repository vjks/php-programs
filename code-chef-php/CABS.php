<?php

$num_tests = readline();

for($i = 0; $i < $num_tests; $i++) {
    $fares = readline();
    list($first_cab_service, $second_cab_service) = explode(" ", $fares);
    if ($first_cab_service < $second_cab_service) {
        print("FIRST\n");
    } elseif ($second_cab_service < $first_cab_service) {
        print("SECOND\n");
    } else {
        print("ANY\n");
    }
}

// your code goes here
/*
$t = readline( );
for ($i=$t; $i!=0; $i--)
{
    list($x, $y)=explode(" ",readline());
   if($x<$y){
       echo "first\n";
   }
   else if($x>$y){
       echo "second\n";
   }
   else if($x==$y){
       echo "any\n";
   }
}*/