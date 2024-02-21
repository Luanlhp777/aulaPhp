<?php
// VERIFIQUE AS SEGUINTES OPERAÇÕES COM AND.
// 15 > 5 AND "JOÃO" === "JOÃO".
// "TESTE" > 5 AND 1.
// 2 == 3 AND 5 >= 3.


    if(15 > 5 && "Joao" === "Joao"){ // TRUE "AND" TRUE.
        echo "Operacão 1 <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS.
    }

    if("teste" > 5 && 1){ //**NESTA VERSÃO DO PHP O 5 É CONVERTIDO EM STRING POR ISSO OS DOIS SÃO TRUE.
        echo "Operação 2 <br>";
    }

    if(2 == 3 && 5 >= 3){ // FALSE "AND" TRUE
        echo "Operação 3 <br>"; // NÃO IMPRIME PQ UMAS DAS CONDIÇÕES É FALSE.
    }

    // TESTE
    if(10 > 5 && 1){ // TRUE "AND" TRUE
        echo "A comparação é verdadeira <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS LEMBRANDO QUE 1 É TRUE
    }

    if(10 > 5 && 0){ // TRUE "AND" FALSE
        echo "A comparação é falsa <br>"; // NÃO VAI IMPRIMIR PQ 0 É FALSE
    }