<?php
// INSIRA O VALOR 5 EM UMA VARIÁVEL, E O VALOR 3 EM OUTRA.
// TESTE OS OPERADORES DE: IGUALDADE ==, DIFERENÇA !=, IDÊNTICO === E NÃO IDÊNTICO !==

    $a = 5;
    $b = 3;

    // OP. IGUALDADE
    if($a == $b){
        echo "A é igual B <br>"; // NÃO IMPRIME PQ NÃO É IGUAL.
    }

    // OP. DIFERENÇA
    if($a != $b){
        echo "A é diferente de B <br>"; // VAI IMPRIMIR PQ É DIFERENTE.
    }

    // OP. IDÊNTICO A
    if($a === $b){
        echo "A é idêntico B <br>"; // NÃO VAI IMPRIMIR PQ NÃO É IDÊNTICO.
    }

    // OP. NÃO IDÊNTICO A
    if($a !== $b){
        echo "A não é idêntico B <br>"; // VAI IMPRIMIR PQ NÃO É IDÊNTICO.
    }