<?php
// Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;
// Imprima o número de letras "a" desta string.

    $str = " O rato roeu a roupa do rei de Roma";

    $contadorDeA = 0;                                       // Contador de A.


    for($i = 0; $i < strlen($str); $i++){                   // Loop para percorrer a frase.

        if($str[$i] === "a"){                               // Percorre a frase para encontrar a letra A.
            $contadorDeA++;                                 // O que for encontrado é acrescentado no $contadorDeA
        }
    }
    echo "O número de A na frase é de: $contadorDeA";
    echo "<br>";
    printf("O número de A na frase é de: %s <br>", $contadorDeA);