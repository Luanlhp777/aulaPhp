<?php
// Normalmente funções retornam algo, para isso utilizamos a instrução return.
// O objetivo é armazenar o valor de retorno em uma variável e utilizá-lo posteriormente no código.

    function soma($n1, $n2){

        return $n1 + $n2;

    }
    echo soma(4, 4) . "<br>";
    $x = soma(2, 4);
    echo $x . "<br>";

    $y = soma($x, 19);
    echo $y . "<br>";


    function testeRetorno(){

        return "Testando";

    }

    $z = testeRetorno();

    echo $z . "<br>";