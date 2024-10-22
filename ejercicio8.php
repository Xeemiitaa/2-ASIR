<?php

// ----------- FUNCIONES ----------------
function ContarEspacios($frase) {
    // Contamos la cantidad de espacios en la frase
    return substr_count($frase, ' ');
}

function ContarMinusculas($frase) {
    // Recorremos la frase y contamos las letras minúsculas usando ctype_lower
    $contador = 0;
    for ($i = 0; $i < strlen($frase); $i++) {
        if (ctype_lower($frase[$i])) {
            $contador++;
        }
    }
    return $contador;
}

function ContarMayusculas($frase) {
    // Recorremos la frase y contamos las letras mayúsculas usando ctype_upper
    $contador = 0;
    for ($i = 0; $i < strlen($frase); $i++) {
        if (ctype_upper($frase[$i])) {
            $contador++;
        }
    }
    return $contador;
}

// --------- PROGRAMA PRINCIPAL -----
$frase = "Hola Mundo, Este es un Ejemplo de Frase."; // Puedes cambiar esta frase

echo "Frase: " . $frase . "\n";

// a) Contar cuántos espacios contiene
$espacios = ContarEspacios($frase);
echo "La frase contiene " . $espacios . " espacios.\n";

// b) Contar cuántas letras minúsculas contiene
$minusculas = ContarMinusculas($frase);
echo "La frase contiene " . $minusculas . " letras minúsculas.\n";

// c) Contar cuántas letras mayúsculas contiene
$mayusculas = ContarMayusculas($frase);
echo "La frase contiene " . $mayusculas . " letras mayúsculas.\n";

?>
