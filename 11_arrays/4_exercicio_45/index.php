<?php
// Crie um array com a função range de 10 a 45.
// Imprima todos os números com uma soma de 6.
// Se passar de 30 a soma, imprima também que o número é muito alto.

    $arr = range(10, 45);

    for($i = 0; $i < count($arr); $i++){                // Nota-se que criamos um loop para apresentar as somas.
        
        $soma = $arr[$i] + 6;                           // uma variável soma é criada para realizar a soma.
         
        if($soma > 30){                                 // Criamos um if para que quando a soma passar dos 30, apresentar uma mensagem.

            echo "O número $soma é muito alto <br>";

        } else {

            echo "$soma <br>";
            
        }
        
    }