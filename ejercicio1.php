<?php

// ----------- FUNCIONES ----------------
function ContarCaracteres($frase) {
    $numericos = 0;
    $alfabeticos = 0;

    // Recorremos la frase caracter por caracter
    for ($i = 0; $i < strlen($frase); $i++) {
        if (ctype_digit($frase[$i])) {
            $numericos++;
        } elseif (ctype_alpha($frase[$i])) {
            $alfabeticos++;
        }
    }

    return array($numericos, $alfabeticos);
}

function VisualizarResultado($resultado) {
    echo "Números: " . $resultado[0] . "\n";
    echo "Letras: " . $resultado[1] . "\n";
}

// --------- PROGRAMA PRINCIPAL -----
$frase = "Esta es la frase número 123 con 4567 números!";

$resultado = ContarCaracteres($frase);
VisualizarResultado($resultado);

?>
