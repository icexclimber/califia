<?php
// Operadores Aritméticos
$a = 10;
$b = 5;

echo "<h3>Operadores Aritméticos</h3>";
echo "Suma: $a + $b = " . ($a + $b) . "<br>";
echo "Resta: $a - $b = " . ($a - $b) . "<br>";
echo "Multiplicación: $a * $b = " . ($a * $b) . "<br>";
echo "División: $a / $b = " . ($a / $b) . "<br>";
echo "Módulo (resto de la división): $a % $b = " . ($a % $b) . "<br>";
echo "Exponenciación: $a ** $b = " . ($a ** $b) . "<br>";

// Operadores de Comparación
echo "<h3>Operadores de Comparación</h3>";
echo "¿$a es igual a $b? " . ($a == $b ? 'Sí' : 'No') . "<br>";
echo "¿$a es mayor que $b? " . ($a > $b ? 'Sí' : 'No') . "<br>";
echo "¿$a es diferente de $b? " . ($a != $b ? 'Sí' : 'No') . "<br>";
echo "¿$a es idéntico a $b (comparación estricta)? " . ($a === $b ? 'Sí' : 'No') . "<br>";

// Operadores Lógicos
$x = true;
$y = false;

echo "<h3>Operadores Lógicos</h3>";
echo "¿$x y $y son ambos verdaderos? " . ($x && $y ? 'Sí' : 'No') . "<br>";
echo "¿$x o $y es verdadero? " . ($x || $y ? 'Sí' : 'No') . "<br>";
echo "¿$x es falso? " . (!$x ? 'Sí' : 'No') . "<br>";

?>
