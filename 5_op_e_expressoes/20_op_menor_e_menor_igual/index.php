<?php
// COM O OPERADOR MENOR QUE VERIFICAMOS SE UM VALOR É MENOR QUE OUTRO.
// O SÍMBOLO É <
// COM O OPERADOR MENOR OU IGUAL A VERIFICAMOS SE UM VALOR É MENOR OU IGUAL A OUTRO.
// O SÍMBOLO É <=

    $a = 4;
    $b = 12;
    $c = 24;
    $d = 12;

    if($a < $b){
        echo "A é menor que B <br>"; // VAI IMPRIMIR PQ A É MENOR QUE B
    }

    if($c < $b){
        echo "C é menor que B <br>"; // NÃO VAI IMPRIMIR PQ C NÃO É MENOR QUE B.
    }
    
    if($b <= $d){
        echo "B é menor ou igual a D <br>"; // VAI IMPRIMIR PQ B É MENOR OU IGUAL A D.
    }

    if($b <= 42){
        echo "B é menor ou igual a 42 <br>"; // VAI IMPRIMIR PQ B É MENOR OU IGUAL A 42.
    }