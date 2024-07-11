<?php
// Podemos converter uma string em array com a função explode.
// Passamos primeiro o separador como argumento.
// Depois a string que vai ser convertida.

    $frase = "Testando o explode nesta frase";

    $fraseArray = explode(" ", $frase);             // Definindo o explode, nota-se que colocamos o " " para separar e determinar o array.

    print_r($fraseArray);
    echo "<br>";

    $fraseArray2 = explode(",", $frase);            // Observa-se que imprime a frase toda, pois não encontrou nenhuma virgula para determinar arrays.

    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Moto, Barco, Avião";

    $fraseBarray = explode(",", $fraseB);

    print_r($fraseBarray);
    echo "<br>";

    for($i = 0; $i < count($fraseBarray); $i++){    // Exemplo em uma estrutura de repetição.

        echo "$fraseBarray[$i] <br>";
    }