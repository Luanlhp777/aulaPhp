<?php
// CRIE UM ARRAY COM NÚMEROS DE 1 A 20.
// CRIE UM LOOP FOR PARA ESTE ARRAY.
// IMPRIMA APENAS OS PARES.

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] % 2 == 0){ //VERIFICANDO SE O NUMERO É PAR USANDO O OPERADOR DE MODULO %
            echo "Número: $arr[$i] <br>";
        }
    }