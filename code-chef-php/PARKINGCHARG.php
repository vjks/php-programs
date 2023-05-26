<?php
list($charges_1hour, $after_1hour, $parking_duration) = explode(" ", readline());

print( $charges_1hour + ($parking_duration - 1) * $after_1hour);