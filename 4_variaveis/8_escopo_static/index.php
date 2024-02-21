<?php

    function teste(){

        $a = 0;
        $a++;

        echo "$a <br>";
    }

    teste();
    teste();
    teste();

    function testeStatic(){

        static $a = 0; //COM O STATIC O ESCOPO VAI SER MANTIDO E O VALOR VAI SEMPRE SER INCREMENTADO.
        $a++;

        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();