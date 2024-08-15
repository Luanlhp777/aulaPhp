<?php
// Com a função array_keys recebemos um array apenas com as chaves de um array.
// Com a função array_values recebemos um array com apenas os valores de um array.

    $carro = [                                              // Criamos um array associativo que descreve um carro.
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'manual',
        'portas' => 4
    ];

    $chaves = array_keys($carro);                           // Criamos uma variável para inserir a função array_keys.
    print_r($chaves);                                       // Nota-se que irá mostrar as chaves.
    echo "<br>";


    $valores = array_values($carro);                          // Criamos a variável para inserir a função array_values.
    print_r($valores);                                        // Nota-se que irá mostrar os valores.
    echo "<br>";