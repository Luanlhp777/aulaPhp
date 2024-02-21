<?php
// CRIE UM ARRAY DE 10 A 20 COM FOR.
// FAÇA UM LOOP EM CIMA DO ARRAY CRIADO DINAMICAMENTE.
// IMPRIMA APENAS OS NÚMEROS ÍMPARES.

    $arr = [];

    for($i = 10; $i <= 20; $i++){
        array_push($arr, $i);
    }
    print_r($arr);
    echo "<br>";

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] %2 != 0){
            echo "Número ímpar: $arr[$i] <br>";
        }
    }