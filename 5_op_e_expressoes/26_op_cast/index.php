<?php
// COM OS OPERADORES DE CONVERSÃO PODEMOS FORÇAR UMA VARIÁVEL SER DE UM DETERMINADO TIPO.
// NEM TODOS SÃO ÚTEIS, OS MAIS UTILIZADOS SÃO PARA CONVERTER UMA STRING EM NÚMERO.
// OPERADORES: INT, BOOL, FLOAT, STRING, ARRAY, OBJECT E UNSET

    $a = (int) "12"; // ESTAMOS DETERMINANDO QUE UMA STRING VIRE UM INTEIRO.

    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if($a === 12){ // USANDO O OPERADOR IDÊNTICO VAMOS TESTAR SE REALMENTE 12 VIROU UM INTEIRO.
        echo "A é idêntico a 12 <br>";
    }

    $b = (float) "3.14843824"; // ESTAMOS DETERMINANDO QUE UMA STRING VIRE UM FLOAT.

    if($b === 3.14843824){
        echo "B é idêntico a 3.14 <br>";
    }

    $c = (string) 34; // DETERMINANDO QUE UM INTEIRO VIRE UMA STRING.

    echo $c;
    echo "<br>";

    if($c === "34"){
        echo "C é idêntico a 34 <br>";
    }