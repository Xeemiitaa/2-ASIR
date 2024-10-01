// Dado dos numeros dentro de una función , visualizar su suma si son iguales y su producto si son diferentes // 
<?php
function sumaOProducto($num1, $num2) {
    if ($num1 == $num2) {
        // Si los números son iguales, calculamos la suma
        $resultado = $num1 + $num2;
        echo "La suma de $num1 y $num2 es: $resultado";
    } else {
        // Si los números son diferentes, calculamos el producto
        $resultado = $num1 * $num2;
        echo "El producto de $num1 y $num2 es: $resultado";
    }
}

// Ejemplo de uso de la función
sumaOProducto(5, 5);  // Debe mostrar la suma
sumaOProducto(3, 4);  // Debe mostrar el producto
?>
