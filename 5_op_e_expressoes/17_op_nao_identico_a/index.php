<?php
//COM O OPERADOR NÃO IDÊNTICO A VERIFICAMOS SE UM VALOR É DIFERENTE DE OUTRO, AVALIANDO O SEU TIPO TAMBÉM.
//O SÍMBOLO É !==

    $a = 1;
    $b = "1";

    //OP. DIFEREÇA !=
    if($a != $b){
        echo "A é diferente de B 1 <br>"; //NÃO VAI IMPRIMIR PQ OS VALORES SÃO IGUAIS.
    }

    //OP. NÃO IDÊNTICO A 
    if($a !== $b){
        echo "A é diferente de B 2 <br>"; //VAI IMPRIMIR PQ NÃO É IDÊNTICO, ELE IDÊNTIFICA O TIPO DE DADO, UM É FLOAT OUTRO É STRING.
    }

    if(1 !== 2){
        echo "Não é idêntico 1 <br>"; // VAI IMPRIMIR PQ NÃO SÃO IDÊNTICOS.
    }

    if(1 !== "1"){
        echo "Não é idêntico 2 <br>"; // VAI IMPRIMIR PQ ELE IDÊNTIFICA O TIPO DE DADO.
    }

    if([] !== "abc"){
        echo "Não é idêntico 3 <br>"; // VAI IMPRIMIR PQ OS DADOS NÃO TEM NADA A VER UM COM O OUTRO
    }

    if($a !== 1){
        echo "Teste"; //NÃO IMPRIME PQ SÃO IDÊNTICOS.
    }