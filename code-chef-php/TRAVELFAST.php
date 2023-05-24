<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($bike_time, $car_time) = explode(" ", readline());
    if($bike_time < $car_time) {
        print("BIKE\n");
    } elseif($car_time < $bike_time) {
        print("CAR\n");
    } else {
        print("SAME\n"); 
    }
}