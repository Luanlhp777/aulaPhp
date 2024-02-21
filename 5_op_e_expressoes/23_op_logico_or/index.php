<?php
// O OPERADOR LÓGICO OR RESULTA EM VERDADEIRO CASO QUALQUER UM DOS LADOS DA OPERAÇÃO SEJA VERDADEIRO.
// E SÓ RESULTA EM FALSO CASO OS DOIS LADOS SEJAS FALSOS.
// SÍMBOLO ||

    if(5 > 2 || 3 < 4){ // TRUE "OR" TRUE
        echo "A operação 1 é verdadeira <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS
    }

    if(5 > 2 || 30 < 4){ // TRUE "OR" FALSE
        echo "A operação 2 é verdadeira <br>"; // VAI IMPRIMIR PQ APENAS UM DOS LADOS PRECISA SER VERDADEIRA.
    }

    if(5 > 20 || 3 < 4){ // FALSE "OR" TRUE
        echo "A operação 3 é verdadeira <br>"; // VAI IMPRIMIR PQ APENAS UM DOS LADOS PRECISA SER VERDADEIRA.
    }

    if(5 > 20 || 30 < 4){ // FALSE "OR" FALSE
        echo "A operação 4 é verdadeira <br>"; // NÃO VAI IMPRIMIR PQ AMBAS SÃO FALSAS.
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if($a > $b || $d > $c){ // FALSE "OR" TRUE
        echo "A operação 5 é verdadeira <br>"; // VAI IMPRIMIR PQ APENAS UM DOS LADOS PRECISA SER VERDADEIRA.
    }

    // TESTANDO COM OPERADOR AND
    if(($a > $b || $d > $c) && $c < $d){ 
        echo "A operação 6 é verdadeira <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS
    }

    if(($a > $b && $d < $c) || $c < $d){ 
        echo "A operação 7 é verdadeira <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS
    }