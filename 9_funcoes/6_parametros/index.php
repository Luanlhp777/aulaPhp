<?php
// Podemos passar parâmetros para a função.
// Estes parâmetros são como variáveis, que são utilizados dentro da função para moldar a sua execução.
// Não há número máximo de parâmetros.

    function velocidadeMaxima($vel){

        // Verificando se o usúario está realmente passando um inteiro. Se não ele imprime uma msg.
        if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel km/h. <br>";
        } else {
            echo "Por favor, passe um número inteiro. <br>";
        }
        

    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    // Não pode executar funções que exigem parâmetros sem um parâmetro.
    // velocidadeMaxima();

    echo "Teste continuando <br>";

    $velocidade = 125;

    velocidadeMaxima($velocidade);
    velocidadeMaxima(250, "teste"); // Neste caso o PHP ignora o segundo parâmetro desnecessário.
    velocidadeMaxima("teste");

    // Outro parâmetro
    function descreverAnimal($nome, $raca){

        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bod", "Vira lata");
    descreverAnimal("Shark", "Pastor Alemão");
    descreverAnimal("Poodle", "Milly");