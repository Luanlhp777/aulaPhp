<?php
// Com a função strrpos podemos encontrar a última ocorrência de um texto na string.
// Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial.
// Se for retornado false, o texto não está na string.

    $str = "Testando encontrando palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");                                          // Nota-se que o strrpos irá buscar a última ocorrência do texto.

    echo "$palavra <br>";

    $palavra2 = strpos($str, "teste");                                          // Nota-se que o strpos irá buscar a primeira ocorrência do texto

    echo "$palavra2 <br>";

    if(strrpos($str, "Java") === false){                                        // Utilizando o if para buscar a ocorrência requisitada, nota-se que não encontra e retorna false.
        echo "A palavra Java não foi encontrada <br>";
    }

    $p = substr($str, strpos($str, "teste"), 5);                                // Nota-se que ao imprimir já virá a palavra teste pois já sabiamos o indice dela.

    echo "$p <br>";