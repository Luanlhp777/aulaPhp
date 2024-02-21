<?php
// ESTE OPERADOR CONSTITUI UMA ESTRUTURA DE CONDIÇÃO RESUMIDA.
// NA MAIORIA DOS CASOS VAMOS OPTAR POR IF/ELSE.
// PORÉM EM SITUAÇÕES SIMPRES PODEMOS UTILIZAR O TERNÁRIO.
// EXEMPLO: 5 > 2 ? ECHO "5 É MAIOR QUE DOIS" : ECHO "5 É MENOR QUE 2"
// A PRIMEIRA INTERROGAÇÃO VEM ANTES DA COMPARAÇÃO.
// E O : É UTILIZADO PARA UMA SEGUNDA SITUAÇÃO, CASO A PRIMEIRA SEJA FALSA.

    // TRUE
    echo 20 > 10 ? "Deu true <br>" : "Deu false <br>"; // IMPRIME TRUE
    
    // FALSE
    echo 20 > 50 ? "Deu true <br>" : "Deu false <br>"; // IMPRIME FALSE

    $a = 10;
    $b = 5;

    echo $a >= $b ? "Deu true <br>" : "Deu false <br>"; // TRUE

    echo $a === $b ? "Deu true <br>" : "Deu false <br>"; // FALSE

    echo $a === $b && 10 > 5 ? "Deu true <br>" : "Deu false <br>"; // FALSE