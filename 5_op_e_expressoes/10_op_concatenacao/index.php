<?php
// EM PHP PODEMOS CONCATENAR VALORES COM .(PONTO)
// CONCATENAR É JUNTAR VÁRIOS TEXTOS E/OU NÚMEROS EM APENAS UMA STRING, NÃO HÁ LIMITE DE QUANTAS EXPRESSÕES PODEM SER CONCATENADAS.

    echo "Testando a concatenação" . "<br>";
    
    echo "Testando" . " a " . "concatenação" . "<br>";
    
    $t = "Testando";
    $c = "concatenação";
    echo $t . " a " . $c . "<br>";

    $marca = "Ferrari";
    $motor = "3.0";
    $vel_max = 300;

    echo "O carro da " . $marca . " tem um motor " . $motor . " e pode chegar a uma velocidade de " . $vel_max . "km/h. <br>";