<?php
// MESMO EXERCÍCIO SÓ QUE USANDO O "SWITCH"

function calcularDesconto($valor, $categoria) {
    $desconto = 0;
    switch ($categoria) {
        case "Eletronicos":
            $desconto = 0.1;
            break;
        case "vestuário":
            $desconto = 0.2;
            break;
        case "alimentos":
            $desconto = 0.05;
            break;
    }
    return $valor * $desconto;
}

$resultado = calcularDesconto(100.00, "alimentos");
echo "Seu desconto é de R$ $resultado";