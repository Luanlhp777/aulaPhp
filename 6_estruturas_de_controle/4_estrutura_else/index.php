<?php
// A ESTRUTURA ELSE PODE EXECUTAR UM OUTRO BLOCO DE CÓDIGO, ISSO ACONTECE QUANDO A EXPRESSÃO DE IF É FALSA.
// EM ELSE NÃO INSERIMOS EXPRESSÕES.
// QUANDO O IF FOR VERDADEIRO O ELSE NÃO É ACIONADO.

    if(5 > 2){
        echo "Entrou no if <br>";
    } else {
        echo "Entrou no else <br>"; // NÃO VAI ENTRAR NO ELSE SE A PRIMEIRA CONDIÇÃO FOR VERDADEIRA. SÓ O BLOCO DO IF SERÁ EXECUTADO.
    }

    


    if("teste" === 5){
        echo "Entrou no if 2 <br>";
    } else {
        echo "Entrou no else 2 <br>"; // ENTROU NO ELSE PQ A PRIMEIRA CONDIÇÃO É FALSA. PORTANTO O SEGUNDO BLOCO SERÁ EXECUTADO.
    }


    $a = 10;
    $b = 20;

    if($a > $b){
        echo "Entrou no if 3 <br>";
    } else {
        echo "Entrou no else 3 <br>";
    }

    //PODEMOS UTILIZAR VARIÁVEIS DO ESCOPO GLOBAL
    $msg = "Entrou no else 4 <br>";

    if($a > $b){
        echo "Entrou no if 4 <br>";
    } else {
        echo $msg;
    }