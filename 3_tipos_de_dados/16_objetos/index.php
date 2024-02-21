<?php

    class Pessoa {

        function falar(){
            echo "Olá pessoal!";
        }
        function ouvir(){
            echo "Pode falar, estou ouvindo!";
        }
    }

    $luan = new Pessoa();
    $bia = new Pessoa();

    $luan->nome = "Luan";
    $bia->nome = "Bia";

    echo $luan->nome;
    echo "<br>";
    $luan->falar();
    echo "<br>";

    echo $bia->nome;
    echo "<br>";
    $bia->ouvir();