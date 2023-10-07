<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="CSS/registro.css">
    <link rel="shortcut icon" href="Imagenes/registro.png" type="image/x-icon">
</head>
<body>
<header class="header">
        <a href="https://www.unam.mx/"><h2 id="UNAM">UNAM</h2></a>
        <a href="index.php"><h2 id="index">Ir al formulario</h2></a>
        <a href="https://www.aragon.unam.mx/"><h2 id="aragon">FES Aragon</h2></a>
    </header>
    <h1 id="titulo">Tus datos</h1>
    <div>
        <div class="tarjeta">
            <?php
                $name = $_GET["name"];
                $age = $_GET["age"];
                $email = $_GET["email"];
                $password = $_GET["password"];

                echo "<h2>Tu nombre es:</h2>";
                echo "<h3>$name</h3>";
                echo "<br>";
                echo "<h2>Tu edad es:</h2>";
                echo "<h3>$age</h3>";
                echo "<br>";
                echo "<h2>Tu correo es:</h2>";
                echo "<h3>$email</h3>";
                echo "<br>";
                echo "<h2>Tu contraseña es:</h2>";
                echo "<h3>$password</h3>";
            ?>
        </div>
    </div>
    <footer class="footer">
        <p id="texto">Página creada para la Tarea 10 de Programación Web II</p>
    </footer>
</body>
</html>