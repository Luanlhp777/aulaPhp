<?php
// CRIE VARIÁVEIS QUE RECEBEM IDADES.
// CHEQUE SE AS IDADES SÃO MAIORES OU IGUAIS A 18.
// SE SIM, IMPRIMA UMA MENSAGEM QUE A PESSOA É MAIOR DE IDADE.

    $idade1 = 17;
    $idade2 = 18;
    $idade3 = 19;
    $maiorIdade = 18;
    $msg = "É maior de idade <br>";

    if($idade1 >= $maiorIdade){
        echo "1 - ";
        echo $msg;
    }

    if($idade2 >= $maiorIdade){
        echo "2 - ";
        echo $msg;
    }

    if($idade3 >= $maiorIdade){
        echo "3 - ";
        echo $msg;
    }