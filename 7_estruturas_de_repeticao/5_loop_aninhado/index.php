<?php
// COMO NAS ESTRUTURAS DE IF, PODEMOS ADICIONAR UM LOOP DENTRO DE OUTRO.
// O CONTADOR DEVE SER ÚNICO, PARA QUE UM LOOP NÃO AFETE O OUTRO.
// O LOOP INTERNO SERÁ EXECUTADO TANTAS VEZES QUANTO O LOOP EXTERNO FOR.
// E EM CADA UMA DAS SUAS EXECUÇÕES, SERÃO PASSADAS TODAS AS SUAS ETAPAS.

    $i = 1;
    $c = "Variável teste";

    while($i <= 2){

        echo "Loop externo $i <br>";

        //SEGUNDO CONTADOR
        $j = 1;

        echo "$c <br>";

        while($j <= 3){

            echo "Loop interno $j <br>";

            echo "$c <br>";

            $j++;
        }

        $i++;
    }