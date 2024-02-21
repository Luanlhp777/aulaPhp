<?php
// COM ESTES OPERADORES PODEMOS ATRIBUIR VALOR A UMA VARIÁVEL.
// O MAIS CONHECIDO É O =, PORÉM TEMOS ALGUMAS VARIAÇÕES DO MESMO.
// OPERADORES: +=, -=, /=, *= E %=
// CADA UM DESSES FARÁ UMA OPERAÇÃO ANTES DA ATRIBUIÇÃO.

    // +=
    $a = 0;
    $a += 10; // $a = $a + 10
    echo $a . "<br>";

    // -=
    $b = 0;
    $b -= 5; // $b = $b - 5
    echo $b . "<br>";

    // *=
    $c = 5;
    $c *= 2; // $c = $c * 2
    echo $c . "<br>";

    // /=
    $d = 5;
    $d /= 2; // $d = $d / 2
    echo $d . "<br>";

    // %=
    $e = 5;
    $e %= 2; // $e = $e % 2
    echo $e . "<br>";

    // UTILIZANDO VARIÁVEIS.
    $f = 10;
    $g = 20;

    $f += $g; // $f = $f + $g
    echo $f . "<br>";