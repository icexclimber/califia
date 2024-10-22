<?php
//incluir la conexion a la base de datos y funciones nesesarias
include 'db.php';
include 'functions.php';

//Iniciar sesion y procesar formulario
session_start();

//si el servidor pide un post el servidor hara todo lo que diga esa funcion
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);
    $email = sanitizeInput($_POST['email']);
    $confirm_password = sanitizeInput($_POST['comfirm_password']);

    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); //hash es un algoritmo de encriptacion

        $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
        $result = $conn -> query($sql);
        if ($result -> num_rows > 0) {
            $error = "El correo electronico ya esta en registrado.";
        } else {
            $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasena) VALUES ('$username', '$email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) { // insertamos en query que tenemos en la linea 25 y sida verdadero nos mostrara un mensaje que diga mensaje exitoso y si hay error
                $_SESSION ['flash_message'] = "Registro exitoso. Ahora puedes iniciar sesion";
                header("Location: Inicio de sesion\login.php");
                exit();
        } else {
            $error = "Error en el registro: " . $conn->error;
        }
    } 
}
else {
    $error = "Las Contraseñas no coinciden.";
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Registro</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <div class="registro-contenedor">
        <h1>Registro de Usuario</h1>
        <form method="POST" action=""> <!-- Enlace al archivo PHP -->
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirma tu contraseña:</label>
            <input type="password" id="comfirm_password" name="comfirm_password" required>

            <input type="submit" value="Registrarse">
        </form>

        <div class="pie">
            <p>Registro © 2009 | Powered by Nostalgia</p>
        </div>
    </div>
    <script src="C:\xampp\htdocs\PRACTICAS\Practica php\Includes\encrptar.js"></script>
</body>
</html>
