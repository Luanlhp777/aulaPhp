<?php
// Podemos criar muitas variáveis com base em um array.
// Para isso vamos utilizar a função list.
// Ex: list($nome, $idade, $profissao) = $pessoa.

    $pessoa = ["Luan", 32, "TI", "preto"];                                  // Criamos um array com argumentos.

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;                // Desconstruimos o array, transformando cada um dos dados em um array.
    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDosOlhos <br>";