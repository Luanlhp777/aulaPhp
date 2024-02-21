<?php
    
    // is_int() verifica se é um numero inteiro.

    if(is_int(5)){ // True
        echo "É um inteiro <br>";
    }

    if(is_int("Não é um inteiro 2")){ // False
        echo "É um inteiro <br>";
    }

    $a = 10;

    if(is_int($a)){ // True
        echo "É um inteiro 3 <br>";
     }