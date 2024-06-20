<?php
// Podemos utilizar alguns valores que executam funções especiais em strings.
// Precisamos utilizar aspas duplas.
// Exemplos: \n = nova linha.
//           \t = tab.
//           \\ = barra invertida.
//           \$ = sinal de dólar.
// Existem outras, mas essas são as essenciais.

header("Content-type: text/plain");                                                   // A função header serve para dizer ao PHP que o conteudo deste arquivo é texto puro.

// Pular linha
echo "Isso aqui vai ficar na primeira linha.\n E isso na segunda linha. \n";          // Não é necessário colocar mais o <br> pois ele não é mais um html. 

// Tab
echo "Testando o tab \t aqui.\n";

// Barra invertida
echo "Barra invertida \\ \n";

// Dólar
echo "Imprimindo o dólar \$teste. \n";                                                    // Podemos apenas colocar o sinal de dólar, porém se quiser chamar o nome da função será necessário chamar deste jeito.