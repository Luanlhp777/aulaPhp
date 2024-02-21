<?php
// PARA CHAMAR UMA FUNÇÃO BASTA COLOCAR O SEU NOME E ABRIR E FECHAR PARÊNTESES.
// EXEMPLO: funcaoTeste()
// ALGUMAS FUNÇÕES EXIGEM PARÂMETROS.
// O ATO DE CHAMAR UMA FUNÇÃO TAMBÉM É CONHECIDO COMO INVOCAR.
// O PHP TEM DIVERSAS FUNCOES PARA URILIZARMOS NO NOSSO CÓDIGO, EXEMPLOS: strlen, strouppper, strtolower, prin_r, var_dump


// Definindo função
    function soma(){

        $a = 5;
        $b = 6;

        echo $a + $b . "<br>";

    }

// Chamando a função / invocando função
soma();

// Função do PHP para imprimir em letras maiusculas.
echo strtoupper("Testando funcao");