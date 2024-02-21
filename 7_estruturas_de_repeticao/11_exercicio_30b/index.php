<?php
// CRIE UM ARRAY DE 1 A 10.
// UTILIZE UM LOOP FOR PARA CRIAR ESTE ARRAY.
// DICA: VOCÊ PODE UTILIZAR O MÉTODO ARRAY_PUSH(ARR, ELEMENTO) PARA INSERIR UM ELEMENTO EM UM ARRAY.
// IMPRIMA O ARRAY CRIADO COM PRINT_R.


// Cria um array vazio
$arr = array();

// Loop for para adicionar elementos de 1 a 10 no array
for ($i = 1; $i <= 10; $i++) {
  // Insere o elemento no array usando array_push
  array_push($arr, $i);
}

// Imprime o array usando print_r
print_r($arr);