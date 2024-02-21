<?php
// ESCREVA UMA FUNÇÃO CHAMADA verificarCategoria QUE RECEBE UM PARÂMETRO DE ENTRADA REPRESENTANDO UMA CATEGORIA.
// A FUNÇÃO DEVE RETORNAR UMA MENSAGEM DE ACORDO COM A CATEGORIA FORNECIDA:
//          SE A CATEGORIA FOR "ELETRÔNICOS", RETORNAR "Essa categoria é de produtos eletrônicos".
//          SE A CATEGORIA FOR "VESTUÁRIO", RETORNAR "Essa categoria é de produtos de vestuários".
//          SE A CATEGORIA FOR "ALIMENTOS", RETORNAR "Essa é uma categoria de produtos alimentícios".
//          PARA QUALQUER OUTRA CATEGORIA, RETORNAR "Categoria desconhecida".
// O PARÂMETRO DE CATEGORIA SERÁ SEMPRE FORNECIDO COMO UMA STRING.

function verificarCategoria($categoria){
    if($categoria == "Eletronicos"){
        echo "Essa categoria é de produtos eletronicos. <br>";
    } else if ($categoria == "Vestuario"){
        echo "Essa categoria é de produtos de vestuarios. <br>";
    } else if ($categoria == "Alimentos"){
        echo "Essa é uma categoria de produtos alimenticios. <br>";
    } else {
        echo "Categoria desconhecida. <br>";
    }
}

verificarCategoria("Eletronicos");
verificarCategoria("Vestuario");
verificarCategoria("Alimentos");
verificarCategoria("Veiculos");