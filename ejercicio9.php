<?php

// ----------- FUNCIONES ----------------
function MoverFilasMatriz(&$matriz) {
    // Guardamos la cuarta fila en un vector auxiliar
    $tabAux = $matriz[3];

    // La tercera fila pasa a la cuarta
    $matriz[3] = $matriz[2];

    // La segunda fila pasa a la tercera
    $matriz[2] = $matriz[1];

    // La primera fila pasa a la segunda
    $matriz[1] = $matriz[0];

    // El vector auxiliar (antigua cuarta fila) pasa a la primera fila
    $matriz[0] = $tabAux;
}

function VisualizarMatriz($matriz) {
    echo "Matriz actualizada:\n";
    foreach ($matriz as $fila) {
        echo implode(", ", $fila) . "\n";
    }
}

// --------- PROGRAMA PRINCIPAL -----
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
    array(10, 11, 12)
);

echo "Matriz original:\n";
VisualizarMatriz($matriz);

// Mover filas según lo indicado
MoverFilasMatriz($matriz);

echo "\nDespués de mover las filas:\n";
VisualizarMatriz($matriz);

?>
