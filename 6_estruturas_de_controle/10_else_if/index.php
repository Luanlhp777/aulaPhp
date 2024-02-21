<?php
// COM O ELSE IF PODEMOS CRIAR UM NOVO BLOCO DE EXPRESSÃO.
// ESTE BLOCO SERÁ EXECUTADO CASO O PRIMEIRO IF SEJA FALSO.
// O ELSE IF FICA ENTRE O IF E O ELSE.

    if(10 > 5){
        echo "Entrou no if <br>";
    } else if(10 > 6){ // NÃO SERÁ EXECUTADO PQ A PRIMEIRA CONDIÇÃO É VERDADEIRA.
        echo "Entrou no else if <br>";
    }



    if(10 < 5){
        echo "Entrou no if 2 <br>";
    } else if(10 > 6){ // SERÁ EXECUTADO PQ A PRIMEIRA CONDIÇÃO É FALSA.
        echo "Entrou no else if 2 <br>";
    }



    if(10 < 5){
        echo "Entrou no if 3 <br>";
    } else if(10 < 6){
        echo "Entrou no else if 3 <br>"; // NÃO SERÁ EXECUTADO PQ AS DUAS CONDIÇÕES SÃO FALSAS.
    } else {
        echo "Entrou no else 3 <br>";
    }



    if(10 < 5){ // CONDIÇÃO FALSA.
        echo "Entrou no if 4 <br>";
    } else if(10 < 6){ // CONDIÇÃO FALSA.
        echo "Entrou no primeiro else if 4 <br>";
    } else if(11 > 1){ // CONDIÇÃO VERDADEIRA.
        echo "Entrou no segundo else if 4 <br>"; // VAI ENTRAR NESTA CONDIÇÃO DEVIDO AS OUTRAS SEREM FALSAS.
    } else {
        echo "Entrou no else 4 <br>";
    }


    $a = 10;
    $b = 5;
    $msg1 = "Entrou no primeiro else if 5";
    $msg2 = "Entrou no segundo else if 5";

    if(10 < 5){ //CONDIÇÃO FALSA.
        echo "Entrou no if 5 <br>";
    } else if($a > $b){ // CONDIÇÃO VERDADEIRA.
        echo $msg1 . "<br>";
    } else if($b > $a){ // CONDIÇÃO FALSA.
        echo $msg2 . "<br>";
    } else {
        echo "Entrou no else 5";
    }