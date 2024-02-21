<?php
// O DO WHILE É TAMBÉM UMA ESTRUTURA DE REPETIÇÃO.
// PORÉM MENOS UTILIZADA QUE O WHILE.
// A SINTAXE É INVERTIDA.

    $x = 0;
    $teste = "Luan";

    do{
        echo "Testando 'do while' incrementando $x <br>";

        if($x == 2){
            echo "$teste <br>";
        }

        $x++;

    } while($x < 10);

    $y = 10;

    do{
        echo "Testando outro 'do while' decrementando $y <br>";

        if($y == 2){
            echo "$teste <br>";
        }

        $y--;

    } while($y > 0);

    