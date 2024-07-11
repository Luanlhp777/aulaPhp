<?php
// Podemos alterar o cade apenas das palavras com funções em PHP.
// ucfirst - primeira letra da string em maiúscula.
// ucwords - primeira letra de casa palavra em maiúscula.

    $str = "primeira frase como exemplo <br>";

    echo ucfirst($str);                         // Imprimindo a primeira letra da frase maiúscula.

    $str2 = "segunda frase como exemplo <br>";

    echo ucwords($str2);                        // Imprimindo a primeira letra de cada frase maiúscula.