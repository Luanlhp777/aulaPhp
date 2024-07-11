<?php
// Podemos remover as tags de HTML de uma string com a função strip_tags.
// Geralmente para salvar dados no banco removendo as tags.

    $textoHtml = "<p>Testando parágrafo.</p><div>Uma div.</div><p>Outro parágrafo.</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);

    echo $salvarTextoBanco;