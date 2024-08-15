<?php
// Podemos utilizar a função range para criar um array de forma rápida.
// Exemplo: range(1, 10);
// Um array de 1 a 10 será criado, podemos atribuir este valor a uma variável.

    $arr = range(1, 10);
    print_r($arr);
    echo "<br>";


    $arr2 = range(5, 20);
    print_r($arr2);
    echo "<br>";


    $arr3 = range(0, 1000, 100);                // Nota-se que colocamos um steep para que pule de 100 em 100 até chegar nos 1000.
    print_r($arr3);
    echo "<br";