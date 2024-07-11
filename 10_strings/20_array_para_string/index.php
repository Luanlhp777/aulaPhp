<?php
// Podemos converter um array em string com a função implode.
// Passamos primeiro o separador como argumento.
// Depois a string que vai ser convertida.

    $arr = ["Maçã", "Pera", "Mamão", "Batata"];

    $str = implode(", ", $arr);

    echo "$str <br>";

    $arr2 = ["Avião", "Carro", "Moto", "Helicóptero"];

    $str2 = implode(" <-> ", $arr2);                        //Oberva-se que podemos realizar a impressão com qualquer separação.

    echo "$str2 <br>";