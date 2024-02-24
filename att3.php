<?php

    function imprimeDados($nome, $habitantes, $area, $altitude, $estado)
    {
        print $nome . " | " . $habitantes . " | " . $area . "km2 | " . $altitude . "m | " . $estado; 
    }

    $nome = readline("Informe o nome da cidade: \n");
    $habitantes = readline("Informe o número de habitantes da cidade: \n");
    $area = readline("Informe a área da cidade: \n");
    $altitude = readline("Informe a altitude da cidade: \n");
    $estado = readline("Informe o estado em que a cidade está situada: \n");

    imprimeDados($nome, $habitantes, $area, $altitude, $estado);