<?php
// Declarar una variable entera y otra de tipo flotante
$entero = 10;
$flotante = 5.5;

// Suma
$suma = $entero + $flotante;
echo "La suma de $entero y $flotante es: $suma<br>";

// Resta
$resta = $entero - $flotante;
echo "La resta de $entero y $flotante es: $resta<br>";

// Multiplicación
$multiplicacion = $entero * $flotante;
echo "La multiplicación de $entero y $flotante es: $multiplicacion<br>";

// División
if ($flotante != 0) {
    $division = $entero / $flotante;
    echo "La división de $entero entre $flotante es: $division<br>";
} else {
    echo "No se puede dividir entre cero.<br>";
}
?>
