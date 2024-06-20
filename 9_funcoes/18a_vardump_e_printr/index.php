<?php
// Utilizamos duas funções para verificar dados formatados.
// print_r e var_dump.
// As duas apresentam os dados de forma semelhante.
// Porém var_dump exibe de forma "human readable", traduzindo seria algo como "para humanos lerem".

    $arr = [                            // Criando um array com diversos dados.
        "Teste",
        123,
        12393.4567,
        true,
        [1,2,3]
    ];

    print_r($arr);                      // Imprime sem mostrar os tipos de dados.

    echo "<br>";

    var_dump($arr);                     // Imprime mostrando os tipos de dados.