<?php
$tests = readline();

for($i = 0; $i < $tests; $i++) {
    list($dist, $petrol_cost, $diesel_cost, $petrol_dist, $diesel_dist) = explode(" ", readline());
    $litres_on_petrol = $dist / $petrol_dist;
    $litres_on_diesel = $dist / $diesel_dist;
    
    $final_petrol = $litres_on_petrol * $petrol_cost;
    $final_diesel = $litres_on_diesel * $diesel_cost;
    
    if($final_petrol < $final_diesel) {
        print("PETROL\n");
    } elseif ($final_diesel < $final_petrol) {
        print("DIESEL\n");
    } else {
        print("ANY\n");
    }
}