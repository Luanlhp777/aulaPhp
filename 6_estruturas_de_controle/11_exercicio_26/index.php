<?php
// CRIE UMA VARIÁVEL QUE RECEBE UMA VELOCIDADE DE UM CARRO.
// DEPOIS CRIE UMA ESTRUTURA IF QUE VERIFICA ESSA VELOCIDADE.
// SE A VELOCIDADE FOR MENOR QUE 40, IMPRIMA QUE O MOTORISTA ESTÁ NA VELOCIDADE CORRETA.
// SE IGUAL A 40, IMPRIMA UMA MENSAGEM PARA O MOTORISTA TOMAR CUIDADO.
// SE FOR MAIOR QUE 40, IMPRIMA UMA MENSAGEM DE MULTA.

    $vel = 60;
    $velMax = 40;
    
    if($vel < $velMax){
        echo "Parabéns, você está numa velocidade segura <br>";
    } else if ($vel == $velMax){
        echo "Cuidado! Você está no limite de velocidade <br>";
    } else {
        echo "Você foi multado, velocidade acima do permitido. <br>";
    }


    // TESTANDO OS CONHECIMENTOS.
    $velocidade1 = 90;
    $velocidade2 = 40;
    $velocidade3 = 39;
    $msg1 = "Você está na velocidade correta!";
    $msg2 = "Cuidado você está no limite da velocidade!";
    $msg3 = "Você foi multado por estar em alta velocidade!";

    // TESTANTANDO VELOCIDADE MAIOR QUE 40.
    if($velocidade1 < 40){
        echo $msg1 . "<br>";
    } else if ($velocidade1 == 40){
        echo $msg2 . "<br>";
    } else if ($velocidade1 > 40){
        echo $msg3 . "<br>";
    }

    // TESTANDO VELOCIDADE IGUAL A 40.
    if($velocidade2 < 40){
        echo $msg1 . "<br>";
    } else if ($velocidade2 == 40){
        echo $msg2 . "<br>";
    } else if ($velocidade2 > 40){
        echo $msg3 . "<br>";
    }

    // TESTANDO VELOCIDADE MENOR QUE 40.
    if($velocidade3 < 40){
        echo $msg1 . "<br>";
    } else if ($velocidade3 == 40){
        echo $msg2 . "<br>";
    } else if ($velocidade3 > 40){
        echo $msg3 . "<br>";
    }