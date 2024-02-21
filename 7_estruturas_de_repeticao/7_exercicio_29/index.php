<?php
// CRIE UM ARRAY COM VALORES INTEIROS DE 10 A 100, COM INCREMENTO DE 10.
// APLIQUE UM LOOP NESTE ARRAY.
// QUANDO ENTRAR OS VALORES 30 OU 40, PULE PARA A PRÓXIMA EXECUÇÃO.

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $x = 0;

    while($x < count($arr)){

        $numeroAtual = $arr[$x];

        if($numeroAtual == 30 || $numeroAtual == 40){
            $x++;
            continue;
        }

        echo "Elemento: $numeroAtual <br>";

        $x++;
    }