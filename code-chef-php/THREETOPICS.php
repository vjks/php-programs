<?php

    list($a_topic, $b_topic, $c_topic, $x_topic) = explode(" ", readline());
    if($a_topic == $x_topic or $b_topic == $x_topic or $c_topic == $x_topic) {
        print("YES\n");
    } else {
        print("NO\n");
    }