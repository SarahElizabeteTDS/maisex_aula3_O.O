<?php

    function area($base, $altura)
    {
        $area = $base * $altura;
        return $area;
    }

    function perimetro($base, $altura)
    {
        $perimetro = ($base*2) + ($altura*2);
        return $perimetro;
    }

    for ($i = 0; $i < 3; $i++) 
    { 
        $base = readline("Informe a base do seu retângulo: \n");
        $altura = readline("Informe a altura do seu retângulo: \n");
        print "A área do seu retângulo é de: " . area($base, $altura) . "cm\n" . "O perímetro do retângulo é de: " . perimetro($base,$altura) . "cm\n";
    }
