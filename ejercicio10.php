<?php

// ----------- FUNCIONES ----------------
function SumarArrays($array1, $array2) {
    $arraySuma = array(); // Array para almacenar la suma
    
    // Recorremos los arrays y sumamos los valores
    for ($i = 0; $i < count($array1); $i++) {
        $arraySuma[$i] = $array1[$i] + $array2[$i];
    }

    return $arraySuma;
}

function VisualizarArray($array, $nombre) {
    echo $nombre . ": " . implode(", ", $array) . "\n";
}

// --------- PROGRAMA PRINCIPAL -----
$array1 = array(1, 2, 3, 4, 5, 6, 7, 8); // Primer array
$array2 = array(10, 20, 30, 40, 50, 60, 70, 80); // Segundo array

echo "Primer Array:\n";
VisualizarArray($array1, "Array 1");

echo "Segundo Array:\n";
VisualizarArray($array2, "Array 2");

// Sumar los arrays
$arraySuma = SumarArrays($array1, $array2);

echo "\nArray de Sumas:\n";
VisualizarArray($arraySuma, "Array Suma");

?>
