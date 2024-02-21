<?php
// ESCREVA UMA FUNÇÃO CHAMADA calcularDesconto QUE RECEBE DOIS PARâMETROS: O VALOR DE UM PRODUTO E UMA CATEGORIA.
// A FUNÇÃO DEVE RETORNAR O VALOR DO PRODUTO COM O DESCONTO APLICADO, DE ACORDO COM A CATEGORIA.
// CONSIDERE AS SEGUINTES CATEGORIAS E SEUS RESPECTIVOS DESCONTOS:
//      "ELETRÔNICOS": 10% DE DESCONTO.
//      "VESTUÁRIO": 20% DE DESCONTO.
//      "ALIMENTOS": 5% DE DESCONTO.
//      "OUTRAS CATEGORIAS": NENHUM DESCONTO.
// SE A CATEGORIA FOR DESCONHECIDA PU NÃO ESTIVER LISTADA ACIMA, O DESCONTO SERÁ ZERO.
// O VALOR DO PRODUTO E A CATEGORIA SERÃO SEMPRE FORNECIDOS COMO ARGUMENTOS DA FUNÇÃO.

function calcularDesconto($valorProduto, $categoria){

    if ($categoria == "Eletronicos"){
        $desconto = $valorProduto * 0.1;
        echo "Este produto custa R$ $valorProduto e tem desconto de R$ $desconto e é da categoria $categoria. <br>";
    } else if ($categoria == "Vestuario"){
        $desconto = $valorProduto * 0.2;
        echo "Este produto custa R$ $valorProduto e tem desconto de R$ $desconto e é da categoria $categoria. <br>";
    } else if ($categoria == "Alimentos"){
        $desconto = $valorProduto * 0.05;
        echo "Este produto custa R$ $valorProduto e tem desconto de R$ $desconto e é da categoria $categoria. <br>";
    } else {
        echo "Este produto custa R$ $valorProduto e é da categoria $categoria e não terá desconto. <br>";
    }
}

calcularDesconto(100.77, "Eletronicos");
calcularDesconto(200.10, "Vestuario");
calcularDesconto(300.99, "Alimentos");
calcularDesconto(399.99, "Veiculos");