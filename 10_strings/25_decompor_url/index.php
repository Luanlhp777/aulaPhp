<?php
// Com a função parse_url podemos decompor uma URL.
// Vamos receber um array com todas as partes que a URL tem.
// Alguns elementos que podem ser retornados são: protocolo, host, parâmetros.
// Decompor uma URL é separar elas em algumas partes especificas, que é o que a gente mais utiliza na URL, por exemplo: protocolo, host e os parâmetros.

    $url = "https://www.google.com";                // Nota-se que utilizamos a URL do google como parâmetro.

    $arrayUrl = parse_url($url);                    // Um array é criado para mostrar os elentos por índice.

    print_r($arrayUrl);                             // Nota-se que irá imprimir o array solicitado da URL.
    echo "<br>";

    echo $arrayUrl["host"];                         // Neste caso irá mostrar qual é o host da URL.
    echo "<br>";

    
    $url2 = "http://www.horadecodar.com.br/?busca=php";         // Nota-se que a url é mais complexa.

    $arrayUr2 = parse_url($url2);

    print_r($arrayUr2);
    echo "<br>";


    $url3 = "http://www.horadecodar.com.br/usuarios/matheusbattisti?id=12&nome=Matheus";

    $arrayUr3 = parse_url($url3);

    print_r($arrayUr3);
    echo "<br>";