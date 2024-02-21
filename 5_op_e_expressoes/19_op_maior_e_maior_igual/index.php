<?php
// COM O OPERADOR MAIOR QUE VERIFICAMOS SE UM VALOR É MAIOR QUE OUTRO.
// O SÍMBOLO É >
// COM O OPERADOR MAIOR OU IGUAL A VERIFICAMOS SE UM VALOR É MAIOR OU IGUAL A OUTRO.
// O SÍMBOLO É >=

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;
    $e = 7;

    if($a > $b){
        echo "A é maior de B <br>"; // NÃO VAI IMPRIMIR PQ A É MENOR QUE B.
    }

    if($b > $a){
        echo "B é maior que A <br>"; // VAI IMPRIMIR PQ B É MAIOR QUE A.
    }

    if($d >= $c){
        echo "D é maior ou igual a C <br>"; // VAI IMPRIMIR PQ D É IGUAL A C.
    }

    if($d >= $a){
        echo "D é maior ou igual a A <br>"; // VAI IMPRIMIR PQ D É MAIOR QUE A.
    }

    if($d >= $e){
        echo "D é maior ou igual a E <br>"; // NÃO VAI IMPRIMIR PQ D NÃO É MAIOR OU IGUAL E.
    }