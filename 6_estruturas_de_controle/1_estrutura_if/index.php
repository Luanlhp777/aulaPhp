<?php
// A ESTRUTURA IF CHECA SE UMA EXPRESSÃO É VERDADEIRA.
// PODEMOS INCLUIR OPERADORES LÓGICOS NAS EXPRESSÕES.

    // CONDIÇÃO VERDADEIRA
    if(5 > 2){
        echo "Deu certo! Entrou no if. <br>";
    }

    // CONDIÇÃO FALSA
    if(2 >= 5){
        echo "Não vai entrar no if, pq deu false <br>";
    }

    // UTILIZANDO OP. LÓGICOS
    if(10 === 10 && 9 > 3){
        echo "Deu certo! Entrou no if 2 <br>";
    }

    // VARIÁVEIS
    $a = 10;
    $b = 5;
    $c = "Deu certo, entrou no if 3 <br>";

    if($a >= $b){
        echo $c;
    }