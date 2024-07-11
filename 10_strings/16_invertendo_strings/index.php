<?php
// Podemos com PHP inverter uma string, a função strrev realiza esta ação.
// Ela recebe a string que será invertida como parâmetro.

    $palavra = "Testando";    
    $palavraInvertida = strrev($palavra);       // Inverte a palavra.

    echo "$palavra <br>";
    echo "$palavraInvertida <br>";

    $frase = "O programador estava com o prazo curto para fazer o sistema";
    $fraseInvertida = strrev($frase);

    echo "$frase <br>";
    echo "$fraseInvertida <br>";