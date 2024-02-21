<?php
// ESCREVA UMA FUNÇÃO CHAMADA "verificarAcesso" QUE RECEBE DOIS PARÂMETROS:
// *UM NÚMERO INTEIRO REPRESENTANDO A IDADE DE UMA PESSOA E UM BOOLEANO INDICANDO SE A PESSOA POSSUI AUTORIZAÇÃO DE ACESSO.
// A FUNÇÃO DEVE RETORNAR UMA STRING INDICANDO SE A PESSOA PODE OU NÃO TER ACESSO A UM DETERMINADO LOCAL.
// CONSIDERE AS SEGUINTES CONDIÇÕES: 
// *SE A IDADE FOR MAIOR OU IGUAL A 18 ANOS E A AUTORIZAÇÃO FOR VERDADEIRA, RETORNE A STRING "Acesso autorizado".
// *SE A IDADE FOR MENOR OU IGUAL A 18 ANOS, RETORNE A STRING "Acesso negado. Idade mínima requerida é 18 anos".
// *SE A IDADE FOR MAIOR OU IGUAL A 18 ANOS, MAS A AUTORIZAÇÃO FOR FALSA, RETORNE A STRING "Acesso negado. Autorização necessária".

function verificarAcesso($idade, $autorizacao){
    if($idade >= 18 && $autorizacao){ // SE(if) A IDADE FOR MAIOR OU IGUAL(>=) A 18 E(&&) A AUTORIZAÇÃO FOR VERDADEIRA
        echo "Acesso autorizado. <br>";
    } elseif($idade < 18){
        echo "Acesso negado. Idade mínima requerida é 18 anos. <br>";
    } else {
        echo "Acesso negado. Autorização necessária. <br>";
    }
}

verificarAcesso(19, 0);
verificarAcesso(20, 1);
verificarAcesso(17, 1);