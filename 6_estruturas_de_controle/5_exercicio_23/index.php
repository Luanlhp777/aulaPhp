<?php
// COMPLEMENTE O EXERCÍCIO 22.
// INSIRA UM ELSE COM UMA MENSAGEM PARA AS PESSOAS QUE SÃO MENORES DE IDADE.

    $idade1 = 17;
    $idade2 = 18;
    $idade3 = 19;
    $maiorIdade = 18;
    $msg = "Você é maior de idade! <br>";
    $msg2 = "Você não é maior de idade! <br>";


    if($idade1 >= $maiorIdade){
        echo $msg;
    } else{
        echo "1 - " . $msg2;
    }



    if($idade2 >= $maiorIdade){
        echo "2 - " . $msg;
    }else{
        echo "2 - " . $msg2;
    }



    if($idade3 >= $maiorIdade){
        echo "3 - " . $msg;
    }else{
        echo "3 - " . $msg2;
    }