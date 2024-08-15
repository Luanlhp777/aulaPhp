<?php
// Com a função extract podemos criar variáveis rapidamente de arrays associativos.
// O nome da chave será o nome da variável.
// Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita

    $arr = [                                        // Criamos um array associativo com 3 chaves e 3 valores todas strings.
        'cor' => 'vermelho',
        'forma' => 'retângular',
        'material' => 'aço'
    ];

    extract($arr);                                  // Vamos criar as variaveis com base no extract

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";