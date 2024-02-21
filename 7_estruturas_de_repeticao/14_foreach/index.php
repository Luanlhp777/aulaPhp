<?php
// A FOREACH TAMBÉM É UMA ESTRUTURA DE REPETIÇÃO.
// PORÉM ELA É ORIENTADA A UM ARRAY, DEVEMOS UTILIZAR UM PARA QUE A ESTRUTURA REPITA EM TODOS OS ELEMENTOS DO MESMO.

    $nomes = ["Luan", "Maria", "Bia", "Milly"];
    $a = "Filha";

    foreach($nomes as $nome){
        echo "O nome do índice atual é $nome <br>";
        if($nome == "Maria"){// QUANDO O NOME CHEGA EM MARIA, IMPRIME FILHA.
            echo "Minha $a <br>";
        }
    }