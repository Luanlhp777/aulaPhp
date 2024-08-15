<?php
// Podemos adicionar valor ao fim de um array utilizando a atribuição sem determinar um índice.
// Então o valor atribuído será enviado para o último e novo índice do array.
// Exemplo: $arr[] = 5;

    $arr = [1, 2, 3];                           // Nota-se que criamos uma array com 3 elementos.

    $arr[] = 4;                                 // Aqui acrescentamos um elemento na array.
    print_r($arr);
    echo "<br>";

    $arr[] = 5;
    print_r($arr);
    echo "<br>";


    $arr2 = [];                                 // Aqui a mesma coisa, criamos um array vazio.

    $arr2[] = 1;                                // E aqui acrescentamos o valor 1, que será adicionado no final.
    print_r($arr2);
    echo "<br>";


    $arr3 = ["teste1", "teste2", "teste3"];                                 // Criamos outro array vazio.

    $arr3[] = 'testando';                // Nota-se que acontece a mesma coisa, é adicionado um elemento no último índice
    print_r($arr3);
    echo "<br>";

    // A IDEIA É UM POUCO DIFERENTE DO ARRAY ASSOCIATIVO, ELE VAI ADICIONAR UM ITEM, SEM TER A CONTAGEM DO ÍNDICE, E SIM PELO NOME DA CHAVE.