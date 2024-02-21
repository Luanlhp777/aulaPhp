<?php
// CRIE UM LOOP QUE VAI ATÉ O NÚMERO 30;
// O CONTADOR DEVE INICIAR COMO 4;
// FAÇA INCREMENTOS DE 2 EM 2 NO CONTADOR.
// UTILIZE O BREAK PARA PARAR O LOOP QUANDO CHEGAR NO NÚMERO 24.

    $x = 4;
    $limite = 30;

    while($x < $limite){

        echo "Executando o loop $x <br>";

        if($x == 24){
            echo "Terminando o loop <br>";
            break;
        }

        $x += 2;
    }