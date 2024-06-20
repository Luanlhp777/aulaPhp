<?php
// Podemos interpolar variáveis em strings de duas formas.
// Utilizando aspas duplas e colocando a variável e também com chaves e o nome da variável.
// Não há diferença em ambas as formas.
// "Interpolando a variável $teste".
// "Interpolando a variável {$teste}".

    $nome = "Luan";
    $idade = 29;
    $profissao = "TI";

    echo "Meu nome é $nome, tenho $idade anos, e trabalho com $profissao. <br>";                  

    echo "Meu nome é {$nome}, tenho {$idade} anos, e trabalho com {$profissao}. <br>";