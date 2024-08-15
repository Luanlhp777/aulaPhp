<?php
// Podemos criar novos índices com dados em uma array.
// Basta por o nome do array com o novo índice em colchotes e atribuir um valor.
// ex: $arr = "teste";
// E em arrays associativos basta utilizar o nome da nova chave com a atribuição de valor.


    // ADICIONANDO VALORES

    $arr = [];                              // Nota-se que nosso array está vazio.
    print_r($arr);
    echo "<br>";


    $arr[0] = 10;                           // Aqui estou colocando o 10 na posição 0 do nosso array.
    print_r($arr);
    echo "<br>";


    $arr[1] = 15;                           // Posso ir adidicionando valores a arrays desta maneira, criando índices que não existem.
    print_r($arr);
    echo "<br>";


    $arr[5] = 25;                           // Mesmo quebrado uma sequencia logica podemos incluir um valor na possição 5 do array.
    print_r($arr);
    echo "<br>";


    // MODIFICANDO VALORES

    $arr[1] += 55;                          // Nota-se que modificamos o valor do índice 1.
    print_r($arr);
    echo "<br>";


    $arrAssoc = [];
    print_r($arrAssoc);
    echo "<br>";



    $arrAssoc["carro"] = "BMW";
    print_r($arrAssoc);
    echo "<br>";


    $arrAssoc["aviao"] = "Boeing";
    print_r($arrAssoc);
    echo "<br>";


    $arrAssoc["carro"] = "ferrari";
    print_r($arrAssoc);
    echo "<br>";