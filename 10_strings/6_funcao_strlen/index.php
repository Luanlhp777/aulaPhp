<?php
// Utilizando a função srtlen com uma string como parâmetro, vamos receber o tamanho da string.
// Ou seja, a quantidade de caracteres da mesma.
// Exemplo: strlen($string);

    $str1 = "Esta string é muito grande";
    $str2 = "Esta não";

    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if($len1 > $len2){                                          // Se len1 for maior que len2
        echo "A string 1 é maior que a string 2";               // Imprima
    } else {                                                    // senão 
        echo "A string 2 é maior que a string 1";               // Imprima
    }