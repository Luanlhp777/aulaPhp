<?php
// Podemos remover elementos de um array com a função array_splice.
// Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover.
// Ex: array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento.

    $arr = [1, 2, 3, 4, 5, 6];                              // Criamos um array 
    $removidos = array_splice($arr, 1, 2);                  // Criamos uma variável para a função. Nota-se que colocamos o índice inicial e o final.
    print_r($arr);                                          // Irá apenas mostrar nosso array com os itens removidos
    echo "<br>";
    print_r($removidos);                                    // Irá mostrar os elementos removidos.
    echo "<br>";



    $arr2 = [1, 2, 3, 4, 5, 6];
    $removidos2 = array_splice($arr2, 3);                   // Nota-se que não colocamos o índice final, portanto irá mostrar do 3 índice em diante até o final.
    print_r($arr2);
    echo "<br>";
    print_r($removidos2);                                   // Mostra os índices removidos.
    echo "<br>";



    $arr3 = [1, 2, 3, 4, 5, 6];
    $removidos3 = array_splice($arr3, 1, -1);               // Nota-se que colocamos o 1 e o -1 para que busque apenas o primeiro índice e o último.
    print_r($arr3);
    echo "<br>";
    print_r($removidos3);                                   // Mostra os índices removidos.
    echo "<br>";