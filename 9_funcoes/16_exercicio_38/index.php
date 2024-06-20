<?php
// 1- Crie uma função que recebe um array de itens de supermecado.
// 2- Retorne este array em forma de string, separado em vírgulas.

    $lista1 = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];
    $lista2 = ["Carne", "Refrigerante", "Açucar", "Maionese"];                  

    function listaParaString($arr){                                             

        $str1 = "Você levou estes itens do mercado: ";

        for($i = 0; $i < count($arr); $i++){

            if($i + 1 == count($arr)){              
                $str1 .= "$arr[$i].";                // Coloca um . quando estiver no último item.
            } elseif($i + 1 == count($arr) - 1) {   
                $str1 .= "$arr[$i] e ";              // Coloca um e quando estiver no penúltimo item.
            } else{
                $str1 .= "$arr[$i], ";               // Coloca as vírgulas nos demais itens.
            }
        }
        return $str1;
    }

    function listaParaString2($arr){

        $str2 = "Você também levou estes itens: ";

        for($j = 0; $j < count($arr); $j++){

            if($j + 1 == count($arr)){
                $str2 .= "$arr[$j].";
            } elseif($j +1 == count($arr) - 1){
                $str2 .= "$arr[$j] e ";
            } else{
                $str2 .= "$arr[$j], ";
            }
        }
        return $str2;
    }

    echo listaParaString($lista1);
    echo "<br>";
    echo listaParaString2($lista2);