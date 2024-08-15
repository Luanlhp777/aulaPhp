<?php
// Podemos obter o número de elementos de um array com a função count.
// Basta passar o array como argumento.
// Um inteiro será retornado.

    $arr = [1, 2, 3];                   // Criamos um array com 3 elementos.

    echo count($arr) . "<br>";          // Nota-se que ao imprimir a função count irá mostrar quantos elementos temos dentro do array que foi argumentado.



    $arr2 = range(1, 10);               // Criamos um array na função range.

    echo count($arr2) . "<br>";         // Nota-se que irá imprimir a quantidade de elementos conforme argumentado.
    


    $arr3 = ['nome' => 'Luan', 'idade' => 32, 'profissão' => 'TI'];            // Temos também com o array associativo.

    echo count($arr3) . "<br>";         // Nota-se que irá imprimir apenas a quantidade de elementos.