<?php

    function valorY($X)
    {
        $Y = 0;
        $Y = ($X * 5) + ($X * 2) + 3;
        return $Y;
    }

    for ($i=0; $i < 5 ; $i++) 
    { 
        $x = readline("Informe um valor para X: \n");
        print "O valor de Y para esse valor de X é de: " . valorY($x) . "\n";
    }