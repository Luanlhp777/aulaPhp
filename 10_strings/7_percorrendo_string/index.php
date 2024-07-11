<?php
// Podemos percorrer cada um dos caracteres de uma string.
// Para isso vamos utilizar uma estrutura de repetição.
// E o método strlen, para saber o número de caracteress.
// Com isso podemos iterar pela string correta;
//      for($x = 0; $X < strlen($str); $i++){
//          codigo
//      }

    $str = "Esta eh uma string muito grande, ela tem varios caracteres";

    for($i = 0; $i < strlen($str); $i++){      // Este loop vai acontecer enquanto i for menor que o comprimento da string

        echo "$str[$i]";
    }