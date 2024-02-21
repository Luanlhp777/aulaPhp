<?php
//COM O OPERADOR DE IGUALDADE VERIFICAMOS SE UM VALOR É IGUAL AO OUTRO.
// O SÍMBOLO É ==
    if(3 == 3){
        echo "Comparação verdadeira 1 <br>";
    }

    if(3 == 4){
        echo "Comparação verdadeira 2 <br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if($a == $b){
        echo "Comparação verdadeira 3 <br>";
    }

    if($a == $c){
        echo "Comparação verdadeira 4 <br>";
    }

    $nome = "Luan";
    $nomeDoSistema = "Luan";
    
    if($nome == $nomeDoSistema){
        echo "O nome coincide <br>";
    }