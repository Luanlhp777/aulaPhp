<?php
// O SWITCH É UMA ESTRUTURA DE CONDIÇÃO, QUE PODE SUBSTITUIR O IF EM ALGUNS CASOS.
// PODEMOS ADICIONAR A INSTRUÇÃO BREAK, PARA ELE NÃO SER MAIS EXECUTADO.
// HÁ A POSSIBILIDADE TAMBÉM DE ADICIONAR A INSTRUÇÃO DEFAULT, QUE É EXECUTADA CASO NENHUMA CONDIÇÃO SEJA SATISFEITA.

    $x = 5;

    switch($x){ // SWITCH SUBSTITUI O IF EM ALGUNS CASOS.
        case 0: // CASO SEJA VERDADEIRO SERÁ EXECUTADO.
            echo "X é igual a 0 <br>";
            break; // QUANDO COLOCAR O BREAK ELE SAI DO SWITCH E EXECUTA SOMENTE 1 BLOCO.
        case 1:
            echo "X é igual a 1 <br>";
            break;
        default: // SE NENHUM CASO FOR VERDADEIRO SERÁ EXECUTADO O DEFAULT
            echo "X não é igual a nenhum dos valores mencionados <br>";
    }

    $y = "Luan";

    switch($y){
        case "Luan":
            echo "O nome é Luan <br>";
            break;
        case "João":
            echo "O nome é João <br>";
            break;
        default:
            echo "O nome não foi encontrado. <br>";
    }