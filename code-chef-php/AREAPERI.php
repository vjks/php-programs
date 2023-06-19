<?php

fscanf(STDIN, "%d", $length);
fscanf(STDIN, "%d", $breadth);

$area = $length * $breadth;
$perimeter = 2 * ($length + $breadth);

if($area > $perimeter) {
    print("Area\n");
    print($area);
}
elseif($perimeter > $area) {
    print("Peri\n");
    print($perimeter);
}
elseif($perimeter == $area) {
    print("Eq\n");
    print($area);
}
