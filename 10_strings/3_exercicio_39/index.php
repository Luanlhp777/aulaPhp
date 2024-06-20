<?php
// Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira), em array associativo.
// O array deve conter nome => preco.
// Retorne apenas os itens que custam mais que R$10.
// Imprima o retorno.

    $arr = [                                                // Criando o array associativo com itens do objeto carro.
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCaros($arr){                              // Criando a função itensCaros e associando ao array.
        
        $arrItensCaros = [];

        foreach($arr as $item => $preco){                   // Verificar se os itens são menor que 10.

            if($preco > 10) {
                
                array_push($arrItensCaros, $item);
            }
        }
        return $arrItensCaros;
    }

    $novoArr = itensCaros($arr);

    print_r($novoArr);
    echo "<br>";
    var_dump($novoArr);