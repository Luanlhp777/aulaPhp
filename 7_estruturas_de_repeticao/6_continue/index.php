<?php
// O CONTINUE PULA UMA EXECUÇÃO DO LOOP.
// OU SEJA, QUANDO O INTERPRETADOR ENCONTRAR ESTA INSTRUÇÃO, A PRÓXIMA ETAPA DO LOOP SERÁ EXECUTADA.
// NOVAMENTE COSTUMAMOS APLICAR DENTRO DE UMA ESTRUTURA DE CONDIÇÃO.

    $a = 10;

    while($a > 0){

        if($a == 5 || $a == 7){

            echo "Pulou a execução $a <br>";

            $a--;

            continue;
        }

        if($a == 2){

            echo "Terminando o loop com o break no $a <br>";

            break;
        }

        echo "Executando o loop $a <br>";

        $a--;
    }