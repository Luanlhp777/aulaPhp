<?php
// Podemos passar parâmetros que já possuem um valor pré-determinado.
// Então caso você não passe este parâmetro, o valor default entra em cena.
// A função será executada normalmente com o valor definido.

    function teste($a = "Teste"){                   // Definir parâmetro default.

        echo "O valor de A é: $a <br>";
    }

    teste();                                        // Chamando a função que retornará o parâmetro default.
    teste("abc");                                   // Chamando a função novamente com valor(abc), será executado por que ele faz a conversão, troca o parâmetro default pelo valor que foi escrito.
    teste("def");
    teste("ghi");

    function testando($b, $a = "x"){                // Uma boa prática é inserir os default por último para não dar error.

        echo "O valor de A é $a e de B $b <br>";
    }

    testando("9");                                     // É necessário colocar um argumento pois o valor $b não foi definido
    testando("9", "8");