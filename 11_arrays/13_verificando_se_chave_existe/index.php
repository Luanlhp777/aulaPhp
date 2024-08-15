<?php
// Com a função array_key_exists podemos verificar se há um valor em uma respectiva key de um array.
// Podemos fazer essa checagem em um if.
// Ex: array_key_exists("nome", $arr).
// Outra função que podemos utilizar para este fim é a isset.

    $arr = [                                    // Criamos um array associativo.
        'nome' => 'Luan',
        'idade' => 32
    ];


    if(array_key_exists("nome", $arr)){         // Criamos um if para que se a chave existir, irá mostrar que sim
        echo "A chave1 existe! <br>";

    } else {                                          // Senão  mostra que não existe a chave.
        echo "A chave1 não existe! <br>";        
    }




    if(array_key_exists("profissão", $arr)){        // Criamos um exemplo em que não tem a chave.
        echo "A chave2 existe! <br>";
    } else {
        echo "A chave2 não existe! <br>";
    }




    if(isset($arr['nome'])){                       // Nota-se que usamos o isset para fazer a pesquisa.
        echo "A chave3 existe! ISSET <br>";
    } else {
        echo "A chave3 não existe! ISSET <br>";
    }


    if(isset($arr['profissão'])){                   // Utilizamos uma chave que não existe.
        echo "A chave4 existe! ISSET <br>";
    } else {
        echo "A chave4 não existe! ISSET <br>";
    }


    if(isset($x)){                                  // A função isset tbm pode ser usada para verificar uma variável existente ou não.
        echo "A variável existe! <br>";
    } else {
        echo "A variável não existe! <br>";
    }