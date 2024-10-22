<?php

// ----------- FUNCIONES ----------------
function IntercambiarValores(&$vector) {
    // Intercambiamos los primeros 5 con los últimos 5
    for ($i = 0; $i < 5; $i++) {
        $temp = $vector[$i];
        $vector[$i] = $vector[$i + 5];
        $vector[$i + 5] = $temp;
    }
}

function VisualizarVector($vector) {
    echo "Vector intercambiado: " . implode(", ", $vector) . "\n";
}

// --------- PROGRAMA PRINCIPAL -----
$vector = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "Vector original: " . implode(", ", $vector) . "\n";

IntercambiarValores($vector);
VisualizarVector($vector);

?>
