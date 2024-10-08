<?php
// Variables de ejemplo (REEMPLAZAR por consulta a base de datos)
$usuario_valido = "admin";
$password_valida = "1234";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $usuario_valido && $password === $password_valida) {
        // Autenticación exitosa
        echo "Bienvenido, $username!";
        // Redireccionar a la página principal o dashboard
        header('Location: index.php');
    } else {
        // Error en las credenciales
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
