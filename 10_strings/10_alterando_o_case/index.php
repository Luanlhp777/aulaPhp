<?php
// Podemos alterar  as strings para maiúsculas ou minúsculas com funções de PHP.
// strtolower - todas as letras minúsculas.
// strtoupper - todas as letras maiúsculas.

    $str = "String escrita em minuscula <br>";

    echo strtoupper($str);                      // Imprimindo a $str em maiúculas.

    $str2 = "STRING ESCRITA EM MAIUSCULA <BR>";

    echo strtolower($str2);                     // Imprimindo a $str2 em minúsculas.