<?php
// A FOR É COM CERTEZA A ESTRUTURA DE REPETIÇÃO MAIS UTILIZADA. FOR(PARA)
// SUA SINTAXE É MAIS ORGANIZADA, EM APENAS UMA LINHA E APARENTA SER MAIS DIFÍCIL, AO PRIMEIRO OLHAR.

    $nome = "Luan";

    // CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO.
    for($i = 0; $i < 10; $i++){

        if($i == 4){
            echo "$nome <br>";
        }

        if($i == 8){
            break;
        }
        echo "Testando for $i <br>";
    }