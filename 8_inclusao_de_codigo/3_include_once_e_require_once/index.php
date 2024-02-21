<?php
// OS DOIS FUNCIONAM DA MESMA MANEIRA QUE REQUIRE E INCLUDE.
// PORÉM IMPEDEM QUE O MESMO ARQUIVO SEJA ADICIONADO MAIS DE UMA VEZ NA PÁGINA.
// ESTE PODE SER O MÉTODO MAIS INDICADO QUANDO ESTAMOS MONTANDO TEMPLATES COM PHP.

    // Arquivos que não existem.
    // include_once "teste.php";

    // Arquivos que existem.
    include_once "teste2.php";
    include_once "teste2.php"; // MESMO REPETINDO O CÓDIGO ELE NÃO DUPLICA.

    // Arquivos que não existem.
    // require "teste.php";

    // Arquivos que existem.
    require_once "teste3.php";

?>

<p>Testando código!</p>