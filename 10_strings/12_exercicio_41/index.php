<?php
// Transforme a string "este item está em promoção".
// Em "Este item está em PROMOÇÃO".
// OBS: voce pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com funções.

    $str = "este item está em ";
    $str2 = "promocao!";

    echo ucfirst($str) . strtoupper($str2);