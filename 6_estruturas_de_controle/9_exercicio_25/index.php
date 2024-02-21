<?php
// CRIE VARIÁVEIS COM NÚMEROS E OUTRAS COM STRING.
// FAÇA UM IF CHECANDO SE É UM NÚMERO.
// CASO FOR, ATRIBUA A MULTIPLICAÇÃO DESTE NÚMERO POR 2 EM OUTRA VARIÁVEL.
// E CRIE UM OUTRO IF, QUE CHECA SE O NOVO NÚMERO É MAIOR QUE 100.
// SE SIM, IMPRIMA UMA MENSAGEM.

    $a = 10;
    $b = 77;
    $nome = "Luan";
    

    if(is_numeric($a)){ // VERIFICANDO SE É UM NÚMERO.
        echo "É um número <br>";
        $multi1 = $a * 2; // ATRIBUINDO A MULTIPLICAÇÃO DO NÚMERO.
        if($multi1 > 100){ // VERIFICANDO SE O RESULTADO DA MULTIPLICAÇÃO É MAIOR QUE 100.
            echo "O número é maior que 100 <br>";
        } else {
            echo "O número não é maior que 100 <br>";
        }
    } else {
        echo "Não é um número <br>";
    }


    if(is_numeric($b)){
        echo "É um número <br>";
        $multi2 = $b * 2;
        if($multi2 > 100){
            echo "O número é maior que 100 <br>";
        } else {
            echo "O número não é maior que 100 <br>";
        }
    } else {
        echo "Não é um número <br>";
    }


    if(is_numeric($nome)){
        echo "É um número <br>";
    } else {
        echo "Não é um número <br>";
    }