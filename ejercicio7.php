<?php

// ----------- FUNCIONES ----------------
function CalcularMediaFilas($matriz) {
    $medias_filas = array();
    
    // Recorremos cada fila y calculamos la media
    foreach ($matriz as $fila) {
        $media = array_sum($fila) / count($fila);
        $medias_filas[] = $media;
    }

    return $medias_filas;
}

function CalcularMediaColumnas($matriz) {
    $medias_columnas = array();
    
    // Recorreremos por columnas
    for ($col = 0; $col < count($matriz[0]); $col++) {
        $suma_col = 0;
        
        for ($fila = 0; $fila < count($matriz); $fila++) {
            $suma_col += $matriz[$fila][$col];
        }

        $media = $suma_col / count($matriz);
        $medias_columnas[] = $media;
    }

    return $medias_columnas;
}

function CalcularMediaGlobal($matriz) {
    $total = 0;
    $elementos = 0;
    
    // Recorremos todos los elementos de la matriz para sumar
    foreach ($matriz as $fila) {
        $total += array_sum($fila);
        $elementos += count($fila);
    }

    return $total / $elementos;
}

function VisualizarMedias($medias, $tipo) {
    echo "\nMedias de " . $tipo . ":\n";
    foreach ($medias as $index => $media) {
        echo ucfirst($tipo) . " " . ($index + 1) . ": " . $media . "\n";
    }
}

// --------- PROGRAMA PRINCIPAL -----
$matriz = array(
    array(5, 12, 7),
    array(9, 3, 15),
    array(6, 14, 2),
    array(8, 10, 11)
);

echo "Matriz:\n";
foreach ($matriz as $fila) {
    echo implode(", ", $fila) . "\n";
}

// a) Media de cada fila
$medias_filas = CalcularMediaFilas($matriz);
VisualizarMedias($medias_filas, "fila");

// b) Media de cada columna
$medias_columnas = CalcularMediaColumnas($matriz);
VisualizarMedias($medias_columnas, "columna");

// c) Media global de todos los valores
$media_global = CalcularMediaGlobal($matriz);
echo "\nMedia global de todos los valores: " . $media_global . "\n";

?>
