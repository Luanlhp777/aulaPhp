<?php
// O OPERADOR LÓGICO NOT APENAS INVERTE O RESULTADO BOOLEANO DE UMA OPERAÇÃO, SE É TRUE VIRA FALSE E SE É FALSE VIRA TRUE.
// SÍMBOLO !

    if(!(5 > 2)){ // NOTE QUE O OPERADOR "NOT" ESTÁ INVERTENDO UMA OPERAÇÃO VERDADEIRA RESULTANDO EM FALSA.
        echo "A operação 1 é verdadeira <br>"; // NÃO VAI IMPRIMIR PQ É FALSE.
    }

    if(!(5 > 20)){ // NESTE CASO ESTÁ INVERTENDO UMA OPERAÇÃO FALSA EM VERDADEIRA.
        echo "A operação 2 é verdadeira <br>"; // VAI IMPRIMIR PQ É TRUE.
    }

    $a = 10;
    $b = 20;

    if(!($a >= $b)){
        echo "A operação 3 é verdadeira <br>";
    }