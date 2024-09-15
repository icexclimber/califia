<?php
// variable
$num1 = 6;
$num2 = 4;

// operaciones básicas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
// operaciones avanzadas
$modulo = $num1 % $num2;
$exponenciacion = $num1 ** $num2;
$potencia = pow($num1, $num2);
$valor_absoluto = abs(-$num1);
$raiz_cuadrada = sqrt($num2);

// resultados
echo "Suma: $num1 + $num2 = $suma\n";
echo "Resta: $num1 - $num2 = $resta\n";
echo "Multiplicación: $num1 * $num2 = $multiplicacion\n";
echo "División: $num1 / $num2 = $division\n";

echo "Módulo: $num1 % $num2 = $modulo\n";
echo "Exponenciación: $num1 ** $num2 = $exponenciacion\n";
echo "Potencia (usando pow): pow($num1, $num2) = $potencia\n";
echo "Valor absoluto de -$num1 = $valor_absoluto\n";
echo "Raíz cuadrada de $num2 = $raiz_cuadrada\n";

// operación compleja
$resultado = ($num1 + $num2) * ($num1 ** 2) - $num2;
echo "Resultado de la operación: ($num1 + $num2) * ($num1 ** 2) - $num2 = $resultado\n";
?>