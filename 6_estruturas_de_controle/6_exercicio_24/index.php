<?php
// CRIE ALGUMAS VARIÁVEIS COM TIPOS DE DADOS DIFERENTES: STRING, INT E BOOLEAN.
// CHEQUE SE A VARIÁVEL É UM INTEIRO.
// CASO SIM, APRESENTE UMA MENSAGEM CONFIRMANDO O TIPO DE DADO.
// CASO NÃO, APRESENTE OUTRA MENSAGEM.
// **PARA VERIFICAR SE É UM INTEIRO UTILIZAMOS O "IS_INT".

    $a = 12;
    $b = "Teste";
    $c = [];

    if(is_int($a)){
        echo "É um inteiro 1! <br>";
    } else{
        echo "Não é um inteiro 1! <br>";
    }


    if(is_int($b)){
        echo "É um inteiro 2! <br>";
    } else{
        echo "Não é um inteiro 2! <br>";
    }


    if(is_int($c)){
        echo "É um inteiro 3! <br>";
    } else{
        echo "Não é um inteiro 3! <br>";
    }