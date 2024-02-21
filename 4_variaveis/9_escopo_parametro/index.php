<?php
// OS PARÂMETROS DE FUNÇÃO TAMBÉM SÃO CONSIDERADOS TIPOS DE VARIÁVEIS.
// ESTE RECURSO NOS AJUDA A CRIAR FUNÇÕES COM VALORES DINÂMICOS.
// PODENDO ALTERÁ-LOS A CADA INVOCAÇÃO DA MESMA.
// PODEMOS PASSAR MAIS DE UM PARÂMETRO PARA UMA FUNÇÃO.

    function soma($a, $b){

        echo $a + $b;
        echo "<br>";
    }

    soma(2, 4);
    soma(6, 8);
    soma(10, 10);