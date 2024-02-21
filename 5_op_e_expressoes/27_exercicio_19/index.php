<?php
// CONVERTA OS SEGUINTES DADOS PARA INT COM O OPERADOR DE CAST.
// "testando"
// 12.9
// true
// [1, 2, 3]

$a = (int) "testando"; // NÃO CONVERTE STRING EM INT.
echo $a . "<br>"; // TRANSFRMANDO EM 0.


$b = (int) 12.9; // ARREDONDOU 
echo $b . "<br>";


$c = (int) true;
echo $c . "<br>";


$d = (int) [1, 2, 3];
echo $d . "<br>";