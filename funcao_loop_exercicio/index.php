<?php

function potencia($numero, $elevado){
    $resultado = $numero;

    for($k = 1;$k < $elevado; $k++){
        $resultado = $resultado * $numero;
    }

    return $resultado;
}

echo potencia(2, 5);