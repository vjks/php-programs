<?php

$T = readline();

for($i = 0; $i < $T; $i++) {
    list($gym_cost, $trainer_cost, $budget) = explode(" ", readline());
    if($gym_cost + $trainer_cost <= $budget) {
        print("2\n");
    } elseif ($gym_cost > $budget) {
        print("0\n");
    } elseif ($gym_cost <= $budget and $gym_cost + $trainer_cost >= $budget) {
        print("1\n");
    }
}