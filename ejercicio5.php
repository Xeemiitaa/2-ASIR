<?php

// ----------- FUNCIONES ----------------
function GuardarValorEnPosicion(&$vector, $valor, $posicion) {
    // Validamos que la posición esté entre 1 y 15
    if ($posicion >= 1 && $posicion <= 15) {
        // Guardamos el valor en la posición correspondiente (ajustamos a índice 0)
        $vector[$posicion - 1] = $valor;
    } else {
        echo "La posición debe estar entre 1 y 15.\n";
    }
}

function VisualizarVector($vector) {
    echo "Vector actualizado: " . implode(", ", $vector) . "\n";
}

// --------- PROGRAMA PRINCIPAL -----
$vector = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

$valor = 99; // Puedes cambiar este valor para guardar otro número
$posicion = 5; // Cambia esta posición según lo que quieras (debe estar entre 1 y 15)

echo "Vector original: " . implode(", ", $vector) . "\n";
echo "Valor a guardar: " . $valor . " en la posición " . $posicion . "ª.\n";

GuardarValorEnPosicion($vector, $valor, $posicion);
VisualizarVector($vector);

?>
