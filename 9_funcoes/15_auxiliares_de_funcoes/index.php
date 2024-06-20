<?php
// No PHP temos duas funções interessantes para aprender mais sobre funções.
// func_get_arg = retorna uma lista com os argumentos de uma função.
// func_num_args = retorna o número de argumentos de uma função.

    function soma($a, $b) {

        print_r(func_get_args());           // Imprime os argumentos que foram enviado a função

        echo "<br>";

        echo func_num_args() . "<br>";      // Imprime os quantidade de argumentos enviado a função.

        return $a + $b;
    }

    soma(2, 4);