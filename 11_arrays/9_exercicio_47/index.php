<?php
// Crie um array com o seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automático.
// Chame este array de carro.
// Crie variáveis com base neste array.

    $carro = ["Jaguar", "3.0", "Azul", 2018, "Teto solar", "Automático"];

    print_r($carro);
    echo "<br>";


    list($marca, $cilindradas, $cor, $ano, $teto, $cambio) = $carro;
    echo "O carro é da marca $marca.<br>";
    echo "Ele tem $cilindradas cilindradas. <br>";
    echo "É da cor $cor.<br>";
    echo "Ano modelo $ano.<br>";
    echo "$teto incluso. <br>";
    echo "O cambio é $cambio.<br>";