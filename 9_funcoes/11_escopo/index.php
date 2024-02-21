<?php
// Nas funções temos um escopo específico chamado de local, onde as suas variáveis são exclusivamente delas.
// Podemos utilizar as variáveis globais com a instrução global.
// E também há o static, onde podemos manter um valor após a execução de uma função, o que normalmente é resetado.


    $a = 10;
    $b = 15;

    function testeEscopo(){
        $a = 4;

        global $b;

        static $c = 0;

        $a++;

        $b++;

        $c++;

        echo "Escopo LOCAL de A: $a <br>";

        echo "Escopo GLOBAL na função de B: $b <br>";

        echo "Escopo STATIC de C: $c <br>";
    }

    echo "Escopo GLOBAL de A: $a <br>";
    echo "Escopo GLOBAL de B: $b <br>";

    testeEscopo();

    echo "Escopo GLOBAL de B 2: $b <br>";

    testeEscopo();