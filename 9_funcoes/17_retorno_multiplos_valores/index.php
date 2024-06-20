<?php
// Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno.
// E então os índices forma isolada com a nova variável que contém o retorno 
//  function teste(){
//      return["a", 10, true];
//  }

    function alteraDados($nome, $idade){                // Definir a função nome e idade.

        $nome = "Sr. $nome";
        $idade = "$idade anos, ";

        return [$nome, $idade];                         // Criando um array para retornar nome e idade.
    }
    $dados = alteraDados("Matheus", 29);                // Criando a variável dados para incluir nome e idade.

    print_r($dados);                                    // print_r mostra a possição dos dados no array. 

    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1]";           // Imprimindo os dados mencionando as suas possições no array.