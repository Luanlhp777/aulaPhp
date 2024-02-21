<?php

    $x = 10; // Variavel de refencia.

    $y =& $x; // Variavel referenciada.

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15; // Mudando o valor da referenciada.

    echo "Atribuição após mudar a ref. <br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $x = 20;

    echo "Atribuição após mudar a ref.2 <br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $nome = "Luan";

    $nome2 =& $nome;

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "Maria";

    echo "Atribuição após mudar a ref.3 <br>";
    echo $nome;
    echo "<br>";
    echo $nome2;

    // NÃO IMPORTA QUAL MUDAR, A REFERENCIA OU A REFERENCIADA, TODAS VÃO MUDAR O VALOR E TBM O TIPO DE DADO.