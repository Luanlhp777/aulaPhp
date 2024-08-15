<?php
// Criar um array multidimensional com 3 arrays que tem 4 elementos cada.
// Imprima todos os elementos de cada um dos arrays.
// Imprima também quando está mudando de array.

    $arr = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    for($i = 0; $i < count($arr); $i++){                                       // Nota-se que foi criado um loop no array externo

        echo "Imprimindo array externo: " . ($i + 1) . "<br>";                 // Imprimindo array

        for($j = 0; $j < count($arr[$i]); $j++){                               // Criamos um outro loop para imprimir o array interno

            echo $arr[$i][$j] . "<br>";
        }
    }
