<?php
// VERIFIQUE AS SEGUINTES OPERAÇÕES COM OR
// 12 < 5 OR "João" === "João"
// 1 > 5 OR 1
// 20 === "20" AND 51 >= 31

    if(12 < 5 || "João" === "João"){ // FALSE "OR" TRUE
        echo "Operação 1 <br>"; // VAI IMPRIMIR PQ APENAS UM DOS LADOS PRECISA SER VERDADEIRA
    }

    if(1 > 5 || 1){ // FALSE "OR" TRUE **LEMBRANDO QUE 1 É TRUE
        echo "Operação 2 <br>"; // VAI IMPRIMIR PQ APENAS UM DOS LADOS PRECISA SER VERDADEIRA
    }

    if(20 === "20" && 51 >= 31){ // FALSE "AND" TRUE **OPERADOR IDÊNTICO === CHECA O TIPO POR ISSO O PRIMEIRO É FALSE.
        echo "Operação 3 <br>"; // NÃO VAI IMPRIMIR PQ "AND" PRECISA SER AMBAS VERDADEIRAS.
    }

    // TESTE
    if(20 == "20" && 51 >= 31){ // TRUE "AND" TRUE **OPERADOR DE IGUALDADE == VALIDA SOMENTE O VALOR POR ISSO É TRUE
        echo "Operação TESTE <br>"; // VAI IMPRIMIR PQ AMBAS SÃO VERDADEIRAS
    }