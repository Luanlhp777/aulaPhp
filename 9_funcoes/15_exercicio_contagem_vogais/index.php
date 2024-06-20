<?php
// 1- Crie uma função chamada countVowels que recebe uma string como parâmetro.
// 2- A função deve retornar a quantidade de vogais presentes na string.
// 3- Utilize uma estrutura de repetição para percorrer cada caractere da string.
// 4- Utilize uma variável para armazenar o contador de vogais.
// 5- Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.

    function countVowels($string){                      // Essa função recebe um parâmetro $string, que representa o texto onde serão contadas as vogais.
        $vowels = ['a', 'e', 'i', 'o', 'u'];            // $vowels defini um array contendo vogais minúsculas.
        $count = 0;                                     // $count inicianliza uma variável com valor 0 para armazenar a contagem de vogais encontradas.
        for ($i = 0; $i < strlen($string); $i++){       // strlen($string) utilizada para obter o tamanho da string, e, percorre cada caractere da string usando o $i
            $char = strtolower($string[$i]);            // Dentro do laço, converte o caractere atual na posição $i da string para minúscula.
            if (in_array($char, $vowels)){              // Usada para verificar se o caractere convertido ($char) existe dentro do array $vowels.
                $count++;
            }
        }
        return $count;
    }
    echo countVowels("Tudo posso naquele que me fortalece");