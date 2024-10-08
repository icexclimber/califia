<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enciclopedia Califia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f8f9fa;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            margin: 0;
        }
        .profile {
            font-size: 14px;
            margin-right: 20px;
        }
        .profile a {
            text-decoration: none;
            color: #007bff;
            margin-left: 10px;
        }
        .slogan {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .center-image {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .center-image img {
            width: 300px;
            height: auto;
        }
        .button-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        .column {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #343a40;
            color: white;
            text-align: center;
            text-decoration: none;
            width: 200px;
            height: 200px;
            margin: 20px;
            border-radius: 10px;
            transition: background-color 0.3s;
        }
        .button img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }
        .button:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <header>
        <h1>Enciclopedia Califia</h1>
        <div class="profile">
            <a href="perfil.php">Mi Perfil</a>
            <a href="login.php">Iniciar Sesión</a>
        </div>
    </header>

    <div class="slogan">
        Enciclopedia Califia, culturízate a lo cachanilla
    </div>

    <div class="center-image">
        <img src="images/logo_califia.png" alt="Enciclopedia Califia">
    </div>

    <div class="button-container">
        <div class="column">
            <a href="matematicas.php" class="button">
                <img src="images/matematicas.png" alt="Matemáticas">
                <span>Matemáticas</span>
            </a>
            <a href="literatura.php" class="button">
                <img src="images/literatura.png" alt="Literatura">
                <span>Literatura</span>
            </a>
            <a href="arte.php" class="button">
                <img src="images/arte.png" alt="Arte">
                <span>Arte</span>
            </a>
        </div>

        <div class="column">
            <a href="ciencia.php" class="button">
                <img src="images/ciencia.png" alt="Ciencia">
                <span>Ciencia</span>
            </a>
            <a href="biologia.php" class="button">
                <img src="images/biologia.png" alt="Biología">
                <span>Biología</span>
            </a>
            <a href="otros.php" class="button">
                <img src="images/otros.png" alt="Otros">
                <span>Otros</span>
            </a>
        </div>
    </div>
</body>
</html>
