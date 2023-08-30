<?php

list($x, $y) = explode(' ', readline());

if($x < $y) {
    print("Old\n");
} elseif($y < $x) {
    print("New\n");
} else {
    print("Same\n");
}