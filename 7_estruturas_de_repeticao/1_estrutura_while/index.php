<?php
// O WHILE É UMA ESTRUTURA DE REPETIÇÃO, PODE EXECUTAR UM CÓDIGO N VEZES. ATÉ SATISFAZER A SUA CONDIÇÃO.
// GERALMENTE É NECESSÁRIO UM CONTADOR PARA ATINGIR A CONDIÇÃO.

// DEFINIÇÃO DO CONTADOR
$x = 0; 

// INÍCIO / DEFINIÇÃO DA ESTRUTURA.
while($x < 10){

    // CORPO DO LOOP
    echo $x . "<br>";

    // INCREMENTO DO CONTADOR.
    $x++;
}
// A ESTRUTURA BLOQUEIA A EXECUÇÃO DO CÓDIGO.
echo "Continuando código <br>";

$y = 0;

while($y <= 10){

    echo $y . "<br>";

    $y += 2;
}

echo "Continuando código <br>";

$z = 10;

while($z > 0){

    echo $z . "<br>";

    $z--;
}

echo "Continuando código <br>";

$a = 10;

while($a > 0){

    if($a % 2 != 0){
        echo $a . "<br>";
    }

    $a--;
}