<?php
// 1- Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.
// 2- A função deve calcular a soma dos dígitos desse número.
// 3- Retorne o valor da soma.

    function sumDigits($numero){                                            // A função recebe um parâmetro $numero do tipo inteiro.
        $soma = 0;                                                          // A variável $soma é inicializada com 0 para armazenar a soma dos dígitos.
        
        while($numero > 0){                                                 // O loop while continua enquanto o $numero for maior que 0.
            $digito = $numero % 10;                                         // O dígito atual é obtido usando o operador %(módulo) para pegar o resto da divisão por 10.
            $soma += $digito;                                               // A $soma é atualizada adicionando o dígito atual a variável $soma.
            $numero = intval($numero / 10);                                 // O número é dividido por 10 e armazenado novamente em $numero, removendo o dígito processado.
        }
        return $soma;                                                       // A função retorna o valor final da variável $soma, que representa a soma dos dígitos do número original.
    }

    $numero = 12345;
    $somaDosDigitos = sumDigits($numero);                                   // Está variável armazena o resultado da função, que é 15(1+2+3+4+5).

    echo "A soma dos digitos de $numero é: $somaDosDigitos";