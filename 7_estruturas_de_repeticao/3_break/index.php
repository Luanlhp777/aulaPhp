<?php
// PODEMOS SAIR DE UM LOOP WHILE ANTES DO SEU FIM.
// PARA ISSO É NECESSÁRIO ADICIONAR A INSTRUÇÃO BREAK.
// APÓS INTERPRETADA, O LOOP SERÁ AUTOMATICAMENTE FINALIZADO.
// GERALMENTE INSERIMOS ESTA INSTRUÇÃO EM UMA CONDIÇÃO IF.

    $x = 0;

    while($x < 10){

        echo "O X é $x <br>";

        if($x == 5){
            echo "Terminando o loop <br>";
            break;
        }

        $x++;
    }

    echo "Saiu do loop. <br>";