<?php
//COM O OPERADOR IDÊNTICO A VERIFICAMOS SE UM VALOR É IGUAL AO OUTRO, AVALIANDO O SEU TIPO TAMBÉM.
//O SÍMBOLO É ===

    //OP IGUALDADE\\
    if(5 == "5"){
        echo "5 é 5 COM OP DE IGUALDADE <br>";  //VAI IMPRIMIR PQ O OPERADOR É DE IGUALDADE
    }

    //OP IDENTICO A\\
    if(5 === "5"){
        echo "5 é 5 <br>"; //NÃO VAI IMPRIMIR PQ ELE IDENTIFICA O "5" COMO UMA STRING
    }

    if(5 === 5){
        echo "5 é 5 COM OP IDENTICO A <br>"; // VAI IMPRIMIR PQ É IDÊNTICO
    }

    if(3 === "Teste"){
        echo "É igual <br>"; //NÃO VAI IMPRIMIR PQ NADA É IGUAL NEM O TIPO DE DADO E NEM O DADO
    }

    $a = 4;
    $b = 4;
    $c = "4";

    if($a === $b){
        echo "A é igual a B <br>"; //VAI IMPRIMIR PQ É IDÊNTICO
    }

    if($a === $c){
        echo "A é igual a C <br>"; //NÃO VAI IMPRIMIR PQ ELE IDENTIFICA O "4" COMO UMA STRING
    }