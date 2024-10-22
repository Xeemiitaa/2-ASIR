<?php

// ----------- FUNCIONES ----------------
function ContarValoresEspecificos($vector) {
    // Vector de acumuladores para 10, 20, 30, ..., 90
    $acumuladores = array_fill(0, 9, 0); // Crea un array de 9 elementos inicializados a 0

    // Recorremos el vector principal
    foreach ($vector as $valor) {
        // Dependiendo del valor, incrementamos el acumulador correspondiente
        switch ($valor) {
            case 10:
                $acumuladores[0]++;
                break;
            case 20:
                $acumuladores[1]++;
                break;
            case 30:
                $acumuladores[2]++;
                break;
            case 40:
                $acumuladores[3]++;
                break;
            case 50:
                $acumuladores[4]++;
                break;
            case 60:
                $acumuladores[5]++;
                break;
            case 70:
                $acumuladores[6]++;
                break;
            case 80:
                $acumuladores[7]++;
                break;
            case 90:
                $acumuladores[8]++;
                break;
        }
    }

    return $acumuladores;
}

function VisualizarResultados($acumuladores) {
    $valores = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
    
    for ($i = 0; $i < 9; $i++) {
        echo "El valor " . $valores[$i] . " ha sido tecleado " . $acumuladores[$i] . " veces.\n";
    }
}

// --------- PROGRAMA PRINCIPAL -----
$vector = array(10, 20, 30, 40, 50, 10, 20, 30, 10, 90, 80, 70, 60, 90, 20);

echo "Vector: " . implode(", ", $vector) . "\n";

$acumuladores = ContarValoresEspecificos($vector);
VisualizarResultados($acumuladores);

?>
