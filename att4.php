<?php

    function mediaPonderada($A, $B, $C)
    {
        $media = (($A * 3) + ($B * 5) + ($C * 2))/10;
        return $media;
    }

    $A = readline("Informe o termo A: \n");
    $B = readline("Informe o termo B: \n");
    $C = readline("Informe o termo C: \n");

    print mediaPonderada($A, $B, $C);