<p>Testando</p>



<?php
// COM O REQUIRE INSERIMOS UM ARQUIVO DE PHP, OU ATÉ MESMO UM HTML, EM OUTRO.
// PODENDO ASSIM UTILIZAR TUDO QUE ESTÁ DECLARADO NO ARQUIVO INCLUÍDO.
// O REQUIRE GERA ERRO FATAL SE O ARQUIVO NÃO EXISTIR, PARANDO O SCRIPT.

    require "teste.php"

?>

<p>Arquivo do include</p>

<?php

    require "arquivos/funcao.php";

?>
