<?php
// ESCREVA UMA FUNÇÃO CHAMADA "compararNumeros" QUE RECEBE DOIS NÚMEROS INTEIROS COMO PARÂMETROS.
// A FUNÇÃO DEVE COMPARAR OS DOIS NÚMEROS E RETORNAR UMA STRING INDICANDO QUAL NÚMERO É MAIOR OU SE SÃO IGUAIS.
// CONSIDERE AS SEGUINTES CONDIÇÕES:
// *SE O PRIMEIRO NÚMERO FOR MAIOR QUE O SEGUNDO NÚMERO, RETORNE A STRING "O PRIMEIRO NÚMERO É MAIOR".
// *SE O SEGUNDO NÚMERO FOR MAIOR QUE O PRIMEIRO NÚMERO, RETORNE A STRING "O SEGUNDO NÚMERO É MAIOR".
// *SE OS NÚMEROS FOREM IGUAIS, RETORNE A STRING "OS NÚMEROS SÃO IGUAIS".

function compararNumeros($num1, $num2){
    if($num1 > $num2){
        echo "O primeiro número é maior. <br>";
    } else if($num2 > $num1){
        echo "O segundo número é maior. <br>";
    } else{
        echo "Os números são iguais <br>";
    }
   }

   compararNumeros(4, 9);
   compararNumeros(8, 1);
   compararNumeros(10, 10);