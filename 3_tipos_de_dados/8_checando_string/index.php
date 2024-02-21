<?php

    $str = "Luan";
    $num = 30;

    if(is_string($str)) {
        echo "$str é uma string 1 <br>";
    }

    if(is_string($num)) { // NUMERO NÃO É UMA STRING
        echo "$num é uma string 2 <br>";
    }

    if(is_string("Teste")) {
        echo "É uma string 3 <br>";
    }