// Dado dos numeros, si el primero es mayor que el segundo , visualizar los numeros comprendidos entre ambos incluidos

<?php
// Paso 1: Definir los dos números
$num1 = 10; 
$num2 = 5;

// Paso 2: Comparar los números
if ($num1 > $num2) {
    // Paso 3: Mostrar los números comprendidos entre num2 y num1, incluidos
    echo "Los números entre $num2 y $num1 son: ";
    for ($i = $num2; $i <= $num1; $i++) {
        echo $i . " ";
    }
} else {
    echo "El primer número no es mayor que el segundo.";
}
?>