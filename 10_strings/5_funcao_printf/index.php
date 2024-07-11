<?php
// A função printf tem a funcionalidade semelhante a print.
// Porém podemos imprimir valores de forma dinâmica utilizando o símbolo %.
// Exemplo: print("Número %d, 1);
// %s -> string
// %d -> int
// %f -> float

    $nome = "Luan";
    $n = 10;
    
    printf("O nome é %s <br>", $nome);         

    printf("O número é %d e o outro é %d <br>", $n, 150); 
    
    printf("A temperatura atual é %.1f graus. <br>", 12.58); // %.2f serve para imprimir mais duas casa decimais.
