<?php
// OS OPERADORES LÓGICOS EM CONJUNTO DOS DE COMPARAÇAO TAMBÉM RETORNAM UMA BOOLEANO(TRUE OU FALSE).
// NO CASO DE AND TEMOS TRUE APENAS QUANDO AS DUAS COMPARAÇÕES SÃO VERDADEIRAS.
// O SÍMBOLO É &&

    if(5 > 10 && 10 > 5){ // FALSE "AND" TRUE
        echo "Entrou no if <br>"; // NÃO IMPRIME PQ SÓ UMA É VERDADEIRA.
    }

    if(50 > 10 && 10 > 5){ // TRUE "AND" TRUE
        echo "Entrou no if 2 <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS.
    }

    if(50 > 10 && 10 > 500){ // TRUE "AND" FALSE
        echo "Entrou no if 3 <br>"; // NÃO IMPRIME PQ SÓ UMA É VERDADEIRA.
    }

    if(50 > 100 && 10 > 500){ // FALSE "AND" FALSE
        echo "Entrou no if 4 <br>"; // NÃO IMPRIME PQ AMBAS SÃO FALSAS.
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a > $b && $c == $d){ // TRUE "AND" TRUE
        echo "Entrou no if 5 <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS.
    }

    if($b <= $a && $c >= $d){ // TRUE "AND" TRUE
        echo "Entrou no if 6 <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS.
    }

    if($b === $a && $c > $d){ // FALSE "AND" FALSE
        echo "Entrou no if 7 <br>"; // NÃO IMPRIME PQ AMBAS SÃO FALSAS.
    }

    if(($b <= $a && $c >= $d) && $a > $b){ // TRUE "AND" TRUE
        echo "Entrou no if 8 <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS.
    }

    if($b <= $a && $c >= $d && $c === $a){ // TRUE "AND" TRUE "AND" FALSE
        echo "Entrou no if 9 <br>"; // NÃO VAI IMPRIMIR PQ TEMOS UM FALSE.
    }