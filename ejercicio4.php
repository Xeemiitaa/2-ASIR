<?php

// ----------- FUNCIONES ----------------
function BuscarValorEnVector($valor, $vector) {
    // Buscamos el valor en el vector
    $posicion = array_search($valor, $vector);

    // Si se encuentra el valor, devolvemos la posición
    if ($posicion !== false) {
        return $posicion + 1; // Sumamos 1 para que sea la posición en términos humanos (1ª, 2ª, etc.)
    } else {
        return -1; // No encontrado
    }
}

function VisualizarResultado($valor, $posicion) {
    if ($posicion > 0) {
        echo "El valor " . $valor . " se encuentra en la posición " . $posicion . "ª.\n";
    } else {
        echo "El valor " . $valor . " no se encuentra en el vector.\n";
    }
}

// --------- PROGRAMA PRINCIPAL -----
$vector = array(5, 12, 7, 22, 9, 1, 19, 24, 33, 45, 15, 8);

$valor = 22; // Puedes cambiar este valor para buscar otro número

echo "Vector: " . implode(", ", $vector) . "\n";
echo "Valor a buscar: " . $valor . "\n";

$posicion = BuscarValorEnVector($valor, $vector);
VisualizarResultado($valor, $posicion);

?>
