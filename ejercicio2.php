<?php

// ----------- FUNCIONES ----------------
function ContarCaracterEnFrase($caracter, $frase) {
    $contador = 0;

    // Recorremos la frase caracter por caracter
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] === $caracter) {
            $contador++;
        }
    }

    return $contador;
}

function VisualizarResultado($caracter, $contador) {
    echo "El carácter '" . $caracter . "' se encuentra " . $contador . " veces en la frase.\n";
}

// --------- PROGRAMA PRINCIPAL -----
$caracter = 'a'; // Puedes cambiar este valor
$frase = "Esta es una frase de ejemplo para contar la letra a.";

$contador = ContarCaracterEnFrase($caracter, $frase);
VisualizarResultado($caracter, $contador);

?>
