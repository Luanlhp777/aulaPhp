<?php
// Com a função substr, podemos resgatar apenas uma parte da string.
// Ex: substr(str, início, fim).
// Str é a string que vamos procurar algo.
// Início é  indíce inicial da palavra ou texto.
// Fim é o indíce final da palavra ou texto.

    $str = "Esta é a minha string.";

    $minha = substr($str, 10, 5);            // String pai, indice inicial, comprimento da palavra.

    echo $str . "<br>";                      // Imprimindo a string inteira.
    echo $minha . "<br>";                    // Imprimindo apenas o indice selecionado.

    $str2 = "Testando esta string, sem selecionar o comprimento da palavra.";

    $novaString = substr($str2, 9);         // String pai, indice inicial, nota-se que não colocamos o comprimento da palavra, portanto na impressão irá sair a frase completa do indice em diante.

    echo $novaString . "<br>";              // Imprimindo apenas o indice selecionado.

    $novaString2 = substr($str2, 9, -8);    // String pai, indice inicial, colocamos o comprimento negativo para cortar a frase.

    echo $novaString2 . "<br>";