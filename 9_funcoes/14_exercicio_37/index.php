<?php
// Crie uma função chamada defineCorCarro.
// Onde há um parâmetro chamado cor, com valor default de vermelha.
// Retorne a cor do carro.
// Imprima o retorno tanto com parâmetro default, como também definindo a cor.

    function defineCorCarro($cor = "Vermelha"){

        return "A cor do carro é $cor . <br>";

    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";

    $carroAzul = defineCorCarro("Azul");
    echo $carroAzul . "<br>";