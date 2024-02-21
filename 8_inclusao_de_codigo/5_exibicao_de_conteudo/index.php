<?php
// COM UMA TÉCNICA SEMELHANTE AO SHORT TAGS, PODEMOS EXIBIR CONTEÚDO SEM O ECHO.
// ÓTIMA ESTRATÉGIA PARA RESUMIR AS CHAMADAS PHP APENAS PARA EXIBIÇÃO DE VALORES.

    $nome = "Luan";
    $sobrenome = "Pereira";

?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="text" value=" <?= $sobrenome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>