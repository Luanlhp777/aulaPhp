<?php
// Com a função strpos podemos encontrar algum texto na string.
// Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial.
// Se for retornnado false, o texto não está na string.

    $str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $testeEncontrar = strpos($str, "strpos");           // Ele encontra a palavra descrita no texto e nos apresenta a possição.

    echo "$testeEncontrar <br>";

    $testeEncontrar2 = strpos($str, "Java");

    echo "$testeEncontrar2 <br>";

    if($testeEncontrar2 === false){
        echo "Palavra não encontrada <br>";
    }

    $palavra = "com";

    $testeEncontrar3 = strpos($str, $palavra);

    echo "$testeEncontrar3 <br>";

    $palavra2 = "to";

    $testeEncontrar4 = strpos($str, $palavra2);

    echo "$testeEncontrar4 <br>";