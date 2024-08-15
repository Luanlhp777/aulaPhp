<?php
// Com a função strstr podemos encontrar um texto em uma string.
// Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado.
// Se não encontrar nada retorna false.

    $str = "Testando o resto da string, pra ver se dá certo";

    $resto = strstr($str, "resto");                                 // Nota-se que será impresso apenas do resto em diante.

    echo "$resto <br>";

    $s = "string";                                                  // Podemos também executar em uma variável, nota-se que ira imprimir da string em diante.

    $resto2 = strstr($str, $s);

    echo "$resto2 <br>";

    if(strstr($str, ".NET") === false){                             // Utilizando o if caso não encontrar a string desejada, retorne uma msg informando que não encontrou. 
        echo "Não encontramos a string! <br>";
    }