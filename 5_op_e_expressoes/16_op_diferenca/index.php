<?php
//COM O OPERADOR DE DIFERENÇA VERIFICAMOS SE UM VALOR É DIFERENTE DO OUTRO.
//O SÍMBOLO É !=

    $a = 3;
    $b = 4;

    if($a != $b){
        echo "Testando diferença 1 <br>"; //VAI IMPRIMIR PQ É DIFERENTE.
    }

    if($a != 3){
        echo "Testando diferença 2 <br>"; //NÃO VAI IMPRIMIR PQ $a É IGUAL A 3.
    }

    if(false != "teste"){
        echo "Testando diferença 3 <br>"; //VAI IMPRIMIR PQ É DIFERENTE.
    }

    if(3 != "3"){
        echo "Testando diferença 4 <br>"; //NÃO VAI IMPRIMIR PQ É IGUAL
    }

    if(3 != "4"){
        echo "Testando diferença 5 <br>"; //VAI IMPRIMIR PQ É DIFERENTE.
    }