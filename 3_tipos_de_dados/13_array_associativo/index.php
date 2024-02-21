<?php

    $arr = ['nome' => 'Beto', 'patas' => 4, 'cor' => 'Marrom'];

    echo $arr['nome']; //Imprime apenas a chave 'nome'.
    echo "<br>";
    print_r($arr); //Imprime toda array
    echo "<br>";
    echo $arr['patas']; //Imprime apenas a chave 'patas'

    $arrAssoc = ['chave' => 'valor', 'bool' => true];

    echo "<br>";
    print_r($arrAssoc);
