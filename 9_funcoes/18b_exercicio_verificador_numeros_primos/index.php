<?php
// 1- Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.
// 2- A função deve verificar se o número fornecido é um número primo.
// 3- Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.
// 4- Caso o número fornecido seja menor que 2 retorne false.
// 5- Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.

    function isPrime($num){
        if ($num < 2){                              // Verificando se o número é menor que 2.
            return false;
        }

        if ($num % 2 == 0){                         // Verificando se o número é divisivel por 2.
            return false;
        }

        $sqrt = sqrt($num);                         // Calcula a raiz quadrada do número.

        for ($i = 3; $i <= $sqrt; $i+=2){           // Percorre os números de 2 até a raiz quadrada do número.
            if ($num % $i == 0){                    // Verifica se o número é divisivel pelo divisor atual.
                return false;
            }
        }
        return true;
    }

    $numero = 20;

    if(isPrime($numero)){
        echo "$numero é um número primo.";
    } else {
        echo "$numero não é um número primo.";
    }