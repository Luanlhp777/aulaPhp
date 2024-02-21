<?php

    $pessoa = [
        'nome' => 'Luan',
        'idade' => 30,
        'profissao' => 'Programador',
        'Graduacao' => 'ADS'
    ];

    // DESAFIO

    $maiorIdade = 18;

    if($pessoa['idade'] >= $maiorIdade) {
        echo "É maior de idade!";
    }