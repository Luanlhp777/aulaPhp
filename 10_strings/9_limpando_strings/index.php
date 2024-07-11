<?php
// Podemos remover os espaços em branco de uma string com funções de PHP.
// trim - limpa espaços antes e depois da string.
// ltrim - limpa espaços da parte inicial da string.
// rtrim - limpa espaços da parte final da string.
// Desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários.

    $str1 = "  Luan   Pereira         de             Araujo           ";

    echo "Está é a string1: $str1. <br>";


    $strLimpa = trim($str1);

    echo "Está é a string1: $strLimpa. <br>";


    $strLimpa2 = rtrim($str1);

    echo "Está é a string1: $strLimpa2. <br>";