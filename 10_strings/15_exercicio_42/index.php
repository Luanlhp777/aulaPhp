<?php
// Na frase "Cadê meu queijo? Ele estava aqui em cima".
// Resgate apenas a palavra "queijo".

    $str = "Cadê meu queijo? Ele estava aqui em cima";

    $palavra1 = substr($str, 10, 6);
    $palavra2 = substr($str, 22, 6);

    echo $palavra1 . "<br>";
    echo $palavra2 . "<br>";