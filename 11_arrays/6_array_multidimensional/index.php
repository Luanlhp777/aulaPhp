<?php
// Quando inserimos arrays dentro de arrays formamos um array multidimensional, também conhecido como matriz.
// Para acessar este tipo de array também utilizamos índices, acessando o externo e depois os internos.
// Ex: $arr[1][0] => Primeiro elemento do segundo array;

    $arr = [                                        // Nota-se que criamos uma estrutura array que dentro vamos inserir um outro array, com estrutura de matriz com linhas e colunas.
        [6, 5, 4],
        [8, 7, 9]
    ];

    print_r($arr);                                  // Irá imprimir o array com os outros dois arrays
    echo "<br>";


    echo $arr[0][1] . "<br>";                       // [0] Acessando o primeiro array, e [1] que é o segundo elemento.
    echo $arr[1][2] . "<br>";                       // [1] Acessando o segundo array, e [2] que é o terceiro elemento.


    echo count($arr) . "<br>";                      // Nota-se que irá imprimir a quantidade de elementos no array principal, que é dois, mesmo tendo dois arrays, o count conta como dois elementos.
    echo count($arr[0]) . "<br>";                   // Nota-se que irá imprimir a quantidade de elementos do primeiro array[0], ou seja 3 elementos conforme argumentado.