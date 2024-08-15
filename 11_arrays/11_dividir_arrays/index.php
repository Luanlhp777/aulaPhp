<?php
// Podemos dividir um array grande em diversos arrays de números de elementos iguais.
// Vamos utilizar a função array_chunk.
// Passamos o array como argumento e também o número de elementos que cada array deve ter.

    $arr = range(1, 20);                        // Criamos um range de 1 a 20.

    print_r(array_chunk($arr, 4));              // Nota-se que usando o array_chunk separamos o array com 4 elementos, e consequentemente temos varios arrays com 4 elementos.
    echo "<br>";


    
    $arrays = array_chunk($arr, 10);            // Podemos transferir isso para uma variável.

    print_r($arrays);                           // Irá imprimir duas arrays conforme o argumento passado.
    echo "<br>";

    print_r($arrays[1]);                        // Neste caso irá apresentar o segundo array.
    echo "<br>";