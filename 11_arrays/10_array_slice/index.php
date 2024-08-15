<?php
// Com a função array_slice podemos resgatar uma faixa de elementos de um array.
// Passamos 3 parâmetros: o array, índice inicial e quantos elementos queremos resgatar a partir do índice.

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];                            // Criamos um array com seus elementos.

    // Neste caso queremos mostrar os números 4, 5 e 6.
    $slice1 = array_slice($arr, 1, 3);                                  // Nota-se que colocamos o índice inicial(4) e quantidade de elementos que queremos(3).
    print_r($slice1);
    echo "<br>";


    // Aqui queremos mostrar os número 10, 12, 14 e 16.
    $slice2 = array_slice($arr, 4, 4);
    print_r($slice2);
    echo "<br>";


    $slice3 = array_slice($arr, 4);                                     // Nota-se que só colocamos o índice inicial, e desta forma irá apresentar todos os demais índices a partir do inicial.
    print_r($slice3);
    echo "<br>";


    $slice4 = array_slice($arr, 4, -3);                                 // Nota-se que só irá apresentar somente o 10 e 12, pois o último índice é negativo, portanto, ele vai contar -3 elementos.
    print_r($slice4);
    echo "<br>";