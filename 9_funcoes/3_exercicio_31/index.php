<?php
// Crie um array com strings. "1
// Utilize a função implode() no array.
// Primeiro argumento: ","
// Segundo argumento: o seu array.
// Atribua a invocação da função a uma variável.
// Exiba o resultado.

    $frutas = ["Maça", "Banana", "Laranja", "Pera", "Uva", "Melancia"];

    $string_frutas = implode(", ", $frutas);

    echo $string_frutas;