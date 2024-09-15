<?php
// cadena
$cadena = "Hola internautas, sean bienvenidos al mundo PHP";

// 1- obtener la longitud de la cadena
$longitud = strlen($cadena);
echo "Longitud de la cadena: $longitud\n";

// 2- reemplazar la palabra "internautas" por "programadores"
$cadena_reemplazada = str_replace("internautas", "programadores", $cadena);
echo "Cadena después del reemplazo: $cadena_reemplazada\n";

// 3- extraer una subcadena (desde la posición 5, los siguientes 22 caracteres)
$subcadena = substr($cadena, 5, 29);
echo "Subcadena extraída: $subcadena\n";
?>
