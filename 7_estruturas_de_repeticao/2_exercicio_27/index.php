<?php
// CRIE UM ARRAY COM ALGUNS VALORES (PELO MENOS 10) DE TIPOS DE DADOS DIFERENTES.
// FAÇA UM LOOP WHILE PARA EXIBIR APENAS QUE SÃO STRINGS.

    $arr = ["Luan", false, "Maria", 50, "Beatriz", true, "Milly", 12.8, "Casa", 10];
    $x = count($arr);
    $y = 0;

while($y < $x){
    
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }

    $y++;
}