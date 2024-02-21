<?php

    echo 17.7;
    echo "<br>";
    echo 27.7;
    echo "<br>";

    $a = 77.7;

    echo $a;
    echo "<br>";

    if(is_float($a)) {
        echo "É float <br>";
    }

    // OS DOIS JEITOS ESTÁ CERTO

    $a = 17.7;
    $b = 27.7;
    $c = -77.7;

    echo "$a <br>";
    echo "$b <br>";
    echo "$c <br>";

    if(is_float($c)) {
        echo "É float";
    }