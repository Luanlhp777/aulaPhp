<?php
// TESTE A EXPRESSAO "5" * 12 E UTILIZE A FUNCAO GETTYPE() COM O RESULTADO COMO PARAMETRO PARA CHECAR O TIPO RESULTANTE DA OPERACAO \\

    $operacao = "5" * 12;

    echo $operacao . "<br>";

    echo gettype($operacao);
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(12.2);
    echo "<br>";
    echo gettype("teste");