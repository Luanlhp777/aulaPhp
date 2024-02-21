<?php
// Crie uma função que verifica se um número é par ou ímpar.
// Se for par imprima uma mensagem.
// Se for ímpar imprima uma mensagem.

    function verificar($numero){
        if($numero % 2 == 0){
            echo "O número $numero é par! <br>";
        } else{
            echo "O número $numero é ímpar! <br>";
        }
    }

    verificar(10);
    verificar(7);
    verificar(12);
    verificar(3);