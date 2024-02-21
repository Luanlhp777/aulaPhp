<?php

   $a = "Teste";
   $b = 12.8;

   if(is_float($a)) { // NÃO É FLOAT
    echo "É float 1! <br>";
   }

   if(is_float($b)) { // É FLOAT
    echo "É float 2! <br>";
   }

   if(is_float(6565.63)) { // É FLOAT
    echo "É float 3! <br>";
   }

   if(is_float("Teste")) { // NÃO É FLOAT
    echo "É float 4! <br>";
   }