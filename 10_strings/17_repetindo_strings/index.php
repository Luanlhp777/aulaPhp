<?php
// Com a função str_repeat voce pode repetir n vezes uma determinada string.
// O primeiro argumento é a string que será repetida.
// O segundo é o numero de repetições.

    $str = "Teste";
    $strRepetida = str_repeat($str, 5);          // Definindo quantas vezes esta string será repetida, no caso 5x

    echo "$strRepetida <br>";

    $frase = "Testando repetição por frase ";

    echo str_repeat($frase, 3);                 // Podemos observar que não precisa definir a frase em uma variavel.